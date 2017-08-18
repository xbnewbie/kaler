<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/16/2017
 * Time: 8:32 AM
 */

class Api extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
        $this->load->model('Company_model');
        $this->load->model('Profile_model');
        $IdAppUser = $this->input->cookie('IdAppUser');
        $AuthKey   = $this->input->cookie('Authkey');
        $UserName  = $this->input->cookie('UserName');
        $user_data     = array('UserName' =>$UserName,'UserPass' =>$AuthKey);
        $user = $this->User_model->get($user_data);
        if(!$user){
            $this->login_require();
            exit();
        }

    }

    ##profile_api
    function save_profile(){

        $p = $this->input->post('profile');
        $i   = $this->input->post('item_profile');
         if(!empty($p)){
             $profile = json_decode($p);
             $item_profile = json_decode($i);
             $IdProfile = $this->Profile_model->get_max_id()->IdProfile +1;
            $data_profile = array("IdProfile" =>$IdProfile,"FirstName"=> $profile->FirstName,"MiddleName"=>$profile->MiddleName,
                "LastName"=>$profile->LastName,"NickName" =>$profile->NickName,"PhotoProfile"=>"","IdCompany" => $profile->IdCompany);
             if(!empty($_FILES['PhotoPicture'])){
                 $config['upload_path']          = './uploads/users/';
                 $config['allowed_types']        = 'gif|jpg|png';
                 $this->load->library('upload', $config);
                 if ( ! $this->upload->do_upload('PhotoPicture'))
                 {
                     $this->error_msg('failed_upload');
                 }else{

                     $upload_data =$this->upload->data();
                     $data_profile['PhotoProfile'] =$upload_data['file_name'];
                 }
             }
             if($this->Profile_model->insert($data_profile)){
                 foreach($item_profile as $item) {
                     $arr = array("IdProfile" => $IdProfile, "KodeCategory" => $item->id, "Label" => $item->value, "Description" => "");
                     $this->Profile_model->insert_item_profile($arr);
                 }
             }
             $this->success_msg();
         }else{
        $this->error_msg();
         }
    }

    function get_cards_company(){
        $data = 1;//json_decode(file_get_contents('php://input'));
        $IdCompany =6;// $data->IdCompany;
         $cards = $this->Profile_model->get_profile_by_company($IdCompany);
         $this->success_msg($cards);
    }
    ##company_api
    function add_company(){
        $companyName = $this->input->post('CompanyName');
        $config['upload_path']          = './uploads/company/';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('CompanyLogo'))
        {
         $this->error_msg('failed_upload');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $companyLogo =$data['upload_data']['file_name'];
            $arr = array("CompanyName" => $companyName,"CompanyLogo"=>$companyLogo);
            if($this->Company_model->insert($arr)){
                $this->success_add_company_msg($companyName,$companyLogo);
            }else{
                $this->error_msg();
            }

        }

    }
    function list_company(){
     $list = $this->Company_model->getAll();
       $this->success_msg($list);
    }

    function view_company(){
        $data = json_decode(file_get_contents('php://input'));
        $IdCompany = $data->IdCompany;
        if(!empty($IdCompany)){
            $company = $this->Company_model->getById($IdCompany);
            $this->success_msg($company);
        }else{
            $this->error_msg();
        }
    }
    function edit_company(){
        $companyName = $this->input->post('CompanyName');
        $idCompany   = $this->input->post('IdCompany');
        if(empty($_FILES['CompanyLogo'])){
            $arr = array("CompanyName" => $companyName);
            if($this->Company_model->update($idCompany,$arr))
            {
                $this->success_msg('with_no_picture');
            }else{
                $this->error_msg();
            }
        }else{
            $config['upload_path']          = './uploads/company/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('CompanyLogo'))
            {
                $this->error_msg('failed_upload');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $companyLogo =$data['upload_data']['file_name'];
                $arr = array("CompanyName" => $companyName,"CompanyLogo"=>$companyLogo);
                if($this->Company_model->update($idCompany,$arr)){
                   // $this->success_add_company_msg($companyName,$companyLogo);
                    $this->success_msg('with_update_picture');
                }else{
                    $this->error_msg();
                }
            }
        }

    }


    ##
    function insert_item_profile($arr){

    }
    ##message
    function error_msg($msg=''){
        $arr = array("status" => false,"data"=>$msg);
        echo json_encode($arr);
    }
    function success_msg($data=''){
        $arr = array("status" => true,"data" =>$data);
        echo json_encode($arr);
    }

    function login_require(){
        $arr = array("status" => false,"reason"=>"not_login");
        echo json_encode($arr);
    }
    function success_add_company_msg($CompanyName,$CompanyLogo){
        $arr = array("status" => true,'CompanyName' =>$CompanyName,'CompanyLogo' =>$CompanyLogo);
        echo json_encode($arr);
    }

}