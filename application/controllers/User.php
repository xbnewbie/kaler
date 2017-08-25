<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/16/2017
 * Time: 8:32 AM
 */
class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index(){
        $this->load->library('session');
        $IdAppUser = $this->input->cookie('IdAppUser');
        $AuthKey   = $this->input->cookie('Authkey');
        $UserName  = $this->input->cookie('UserName');
    }

    function login(){
        $data = json_decode(file_get_contents('php://input'));
        if(empty($data)){
            $this->error_msg();
            return;
        }
        $username = $data->UserName;
        $password = md5(md5($data->UserPass));
        $user_data     = array('UserName' =>$username,'UserPass' =>$password);
        $user = $this->User_model->get($user_data);
        if(!empty($user)){
            $app = $this->User_model->get_app_user($user->IdAppUser);
            if(!empty($app)){
               setcookie("Authkey",$user->UserPass,time()+1500,"/");
               setcookie("IdAppUser",$user->IdAppUser,time()+1500,"/");
               setcookie("UserName",$user->UserName,time()+1500,"/");
                $arr = array("status" => true,"Authkey" =>$user->UserPass,"IdAppUser" =>$user->IdAppUser,"UserName" => $user->UserName);
                  $this->success_msg();
            }else{
                $this->error_msg();
            }
        }else{
                $this->error_msg();
        }

    }

    function change_password(){
        $data = json_decode(file_get_contents('php://input'));
        if(empty($data)){
            $this->error_msg();
            return;
        }
        $username = $data->UserName;
        $old_password = md5(md5($data->OldPass));

        $new_password = md5(md5($data->NewPass));
        $user_data     = array('UserName' =>$username,'UserPass' =>$old_password);
        $user = $this->User_model->get($user_data);
        if(!empty($user)){
            $new_user = array('UserName' =>$user->UserName,'UserPass' =>$new_password);
            if($this->User_model->update($user->UserName,$new_user)){
                $this->success_msg();
            }else{
                $this->error_msg();
            }
        }

    }

    function error_msg(){
        $arr = array("status" => false);
        echo json_encode($arr);
    }
    function success_msg(){
        $arr = array("status" => true);
        echo json_encode($arr);
    }
    function test(){
        $password = md5(md5("b"));
        $user = array("UserName" => "a","UserPass" => $password,"isActive"=>1);
        $ap = $this->User_model->insert($user);

    }
}