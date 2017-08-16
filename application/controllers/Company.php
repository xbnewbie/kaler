<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/16/2017
 * Time: 2:21 PM
 */
class Company extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }

    function add_company(){
       $CompanyName = $this->input->post('CompanyName');

        $config['upload_path']          = './uploads/company';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('CompanyLogo'))
        {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            var_dump($data);
        }

    }
}