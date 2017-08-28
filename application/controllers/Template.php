<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/18/2017
 * Time: 9:04 AM
 */
class Template extends CI_Controller{
function __construct()
{
    parent::__construct();
    $this->load->helper('url');
}

    function index(){
        $this->load->view('layout_admin');
    }
    function login(){
        $this->load->view('layout_login');
    }
    function change_password(){
        $this->load->view('admin_change_password');
    }
    function company(){
        $this->load->view('company');
    }
    function add_company(){
        $this->load->view('add_company');
    }
    function edit_company(){
        $this->load->view('edit_company');
    }
    function list_company(){
        $this->load->view('list_company');
    }
    function menu_admin(){
        $this->load->view('layout_admin');
    }
    function add_profile(){
        $this->load->model('Company_model');
        $this->load->model('Profile_model');
        $IdCompany = $this->uri->segment(3);
        $company = $this->Company_model->getById($IdCompany);
        $item_category = $this->Profile_model->get_all_item_category();
        $data['company'] = $company;
        $data['item_category'] = $item_category;
        $this->load->view('layout_add_profile',$data);
    }

    function view_card(){
        //  $this->load->view('view_card');

       $this->load->view('template_card_pub');
    }
    function edit_card(){
        $this->load->model('Profile_model');
        $item_category = $this->Profile_model->get_all_item_category();
        $data['item_category'] = $item_category;
        $this->load->view('edit_card',$data);
    }

    function cardhome(){
        $this->load->view('cardhome');
    }

    function modal_create(){
        $this->load->view('modal_create');
    }

    function choose_template(){
        $this->load->view('choose_template');
    }
}