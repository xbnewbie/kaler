<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/16/2017
 * Time: 2:22 PM
 */

class Company_Model extends CI_Controller{

    function insert($company){
        return $this->db->insert('company',$company);
    }

    function get($id_company){
        $this->db->select("*");
        $this->db->from('company');
        $this->db->where('IdCompany',$id_company);
        return $this->db->get()->row();
    }

    function update($id_company,$company){
        $this->db->where('IdCompany',$id_company);
        return $this->db->update('company',$company);
    }
    function delete($id_company){
        $this->db->where('IdCompany',$id_company);
        return $this->db->delete('company');
    }
}