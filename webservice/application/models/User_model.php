<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/16/2017
 * Time: 8:30 AM
 */
class User_model extends CI_Model{

    function get($user){
        $this->db->select('*');
        $this->db->from('app_user');
        $this->db->where('UserName',$user['UserName']);
        $this->db->where('UserPass',$user['UserPass']);
        $this->db->where('isActive',1);
        return $this->db->get()->row();

    }
    function insert($user){
        return $this->db->insert('app_user',$user);
    }

    function update($Username,$user){
        $this->db->where('UserName',$Username);
        return $this->db->update('app_user',$user);
    }


    function delete($IdAppUser,$user){
        $this->db->where('IdAppUser',$IdAppUser);
        return $this->db->delete('app_user');
    }

    function get_app_user($IdAppUser){
        $this->db->select('*');
        $this->db->from('app_user');
        $this->db->join('app_role_user','app_role_user.IdAppUser = app_user.IdAppUser','left');
        $this->db->join('app_role','app_role_user.KodeAppRole = app_role.KodeAppRole','left');
        $this->db->where('app_user.IdAppUser',$IdAppUser);
        $this->db->where('app_user.isActive',1);
        return $this->db->get()->result();
    }
}