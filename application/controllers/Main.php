<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/23/2017
 * Time: 8:58 AM
 */
class Main extends CI_Controller{

    function index(){
        $NickName  =   $this->uri->segment(1);
        if($NickName=="admin"){
            redirect('index.html#!/login');
        }else{

            $this->load->model('Profile_model');
            $this->Profile_model->add_visitor($NickName);
            redirect("index.html#!/display_card/$NickName");
        }
    }
    function co(){
        echo "c";
    }
}