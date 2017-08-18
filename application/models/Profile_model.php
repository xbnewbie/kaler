<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/18/2017
 * Time: 8:55 AM
 */

class Profile_model extends CI_Model{

    function get_profile($IdProfile){
        $this->db->select('*');
        $this->db->from('profile');
        $this->db->join('item_profile','item_profile.IdProfile = profile.IdProfile','left');
        $this->db->join('item_category','item_category.Kode = item_profile.KodeCategory','left');
        $this->db->where('profile.IdProfile',$IdProfile);
        return $this->db->get()->row();
    }


    function get_profile_by_company($IdCompany){
        $this->db->select('*');
        $this->db->from('profile');
        $this->db->join('item_profile','item_profile.IdProfile = profile.IdProfile','left');
        $this->db->join('item_category','item_category.Kode = item_profile.KodeCategory','left');
        $this->db->where('profile.IdCompany',$IdCompany);
        return $this->db->get()->result();
    }

    function get_all(){
        $this->db->select('*');
        $this->db->from('profile');
        $this->db->join('item_profile','item_profile.IdProfile = profile.IdProfile','left');
        $this->db->join('item_category','item_category.Kode = item_profile.KodeCategory','left');
        return $this->db->get()->result();
    }



    function insert($profile){
        return $this->db->insert('profile',$profile);
    }
    function update($IdProfile,$profile){
        $this->db->where('IdProfile',$IdProfile);
        return $this->db->update('profile',$profile);
    }
    function delete($IdProfile){
        $this->db->where('IdProfile',$IdProfile);
        return  $this->db->delete('profile');
    }

    function insert_item_profile($item_profile){
       return $this->db->insert('item_profile',$item_profile);
    }

    function delete_item_profile($item_profile){

    }

    function get_all_item_category(){
        $this->db->select("*");
        $this->db->from('item_category');
        return $this->db->get()->result();
    }

    function get_max_id(){
        $this->db->select_max("IdProfile");
        $this->db->from('profile');
        return $this->db->get()->row();
    }



}