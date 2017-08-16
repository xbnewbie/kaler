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
        if(empty($this->session->userdata('admin'))){
            $this->load->view('layout_login.php');
        }
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
               setcookie("Authkey",$user->UserPass,time()+500,"/");
               setcookie("IdAppUser",$user->IdAppUser,time()+500,"/");
               setcookie("UserName",$user->UserName,time()+500,"/");
                $arr = array("status" => true,"Authkey" =>$user->UserPass,"IdAppUser" =>$user->IdAppUser,"UserName" => $user->UserName);
                  $this->success_msg();
            }else{
                $this->error_msg();
            }
        }else{
                $this->error_msg();
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
        $password = md5(md5("a"));
        $user = array("UserName" => "a","UserPass" => $password,"isActive"=>1);
        $ap = $this->User_model->update(2,$user);
        var_dump($ap);
    }
}