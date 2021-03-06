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

    function get_profile_by_nickname($nickname){
        $this->db->select('profile.*,item_profile.*');
        $this->db->from('profile');
        $this->db->join('item_profile','item_profile.IdProfile = profile.IdProfile');
        $this->db->where('profile.NickName',$nickname);
        $this->db->where('item_profile.KodeCategory','job');
        return $this->db->get()->row();
    }

    function get_item_profile($IdProfile){
        $this->db->select('*');
        $this->db->from('item_profile');
        $this->db->where('item_profile.IdProfile',$IdProfile);
        return $this->db->get()->result();
    }

    function delete_profile($IdProfile){
        $this->db->where('IdProfile',$IdProfile);
        $this->db->delete('profile');
    }

    function delete_item_profile($IdProfile){
        $this->db->where('IdProfile',$IdProfile);
        $this->db->delete('item_profile');
    }

    function get_profile_by_company($IdCompany){
        $this->db->select('profile.*,item_profile.*');
        $this->db->from('profile');
        $this->db->join('item_profile','item_profile.IdProfile = profile.IdProfile');
        $this->db->where('IdCompany',$IdCompany);
        $this->db->where('item_profile.KodeCategory','job');
         $profiles = $this->db->get()->result();
        return $profiles;
    }


    /*function get_item_profile($IdProfile){
        $this->db->select('profile.IdProfile,item_profile.KodeCategory,item_profile.Label,item_category.Kode,item_category.Deskripsi');
        $this->db->from('profile');
        $this->db->join('item_profile','item_profile.IdProfile = profile.IdProfile','left');
      $this->db->join('item_category','item_category.Kode = item_profile.KodeCategory','left');
      $this->db->where('profile.IdProfile',$IdProfile);
      return $this->db->get()->result();
    }*/
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

    function add_visitor($Nickname){
        $this->db->where('NickName',$Nickname);
        $this->db->set('visit', '`visit`+ 1', FALSE);
        $this->db->update('profile');
    }

    function insertProfileCollection($pc){

        $this->db->where('IdFacebook',$pc['IdFacebook']);
        $this->db->where('IdProfile',$pc['IdProfile']);
        $q = $this->db->get('profile_collection');
        if ( $q->num_rows() == 0 ){
            $this->db->insert('profile_collection',$pc);
        }

    }

    function getAllProfileCollection($IdFacebook){
        $this->db->select('profile.*,item_profile.*,company.*');
        $this->db->from('Profile_collection');
        $this->db->join('profile','profile.IdProfile = profile_collection.IdProfile','left');
        $this->db->join('company','company.IdCompany = profile.IdCompany','left');
        $this->db->join('item_profile','item_profile.IdProfile = profile.IdProfile','left');
        $this->db->where('IdFacebook',$IdFacebook);
        $this->db->where('item_profile.KodeCategory','job');
        return $this->db->get()->result();
    }


}