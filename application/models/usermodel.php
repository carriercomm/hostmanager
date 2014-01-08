<?php

/*
 * Developer : pan-x (info@pan-x.com)
 * All code (c)2013 pan-x all rights reserved
 */
 
Class userModel extends CI_Model
{

    private $tbl_name= 'users';

    function userModel(){
        parent::__construct();
    }

    function login($username, $password) {
        $this -> db -> select('id, username, password, loginLevel');
        $this -> db -> from('users');
        $this -> db -> where('username = ' . "'" . $username . "'");
        $this -> db -> where('password = ' . "'" . $password . "'");
        $this -> db -> limit(1);
        $query = $this -> db -> get();
        if($query -> num_rows() == 1)
            return $query->result();
        else
            return false;
    }

    function autologin($checkstring) {
        $this -> db -> select('id, username, password, loginLevel');
        $this -> db -> from('users');
        $this -> db -> where('MD5(CONCAT(username,password)) = ' . "'" . $checkstring . "'");
        $this -> db -> limit(1);
        $query = $this -> db -> get();
        if($query -> num_rows() == 1)
            return $query->result();
        else
            return false;
    }

    function count_all(){
        return $this->db->count_all($this->tbl_name);
    }

    function get_paged_list($limit = 10, $offset = 0){
        $this->db->order_by('id','asc');
        return $this->db->get($this->tbl_name, $limit, $offset);
    }

    function get_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get($this->tbl_name);
    }

    function get_by_username($username){
        $this->db->where('username', $username);
        return $this->db->get($this->tbl_name);
    }

    function get_by_email($email){
        $this->db->where('email', $email);
        return $this->db->get($this->tbl_name);
    }

    function get_by_email_username($email,$username){
        $this->db->where('username',$username);
        $this->db->where('email',$email);
        return $this -> db -> get($this->tbl_name);
    }

    function save($user){
        $this->db->insert($this->tbl_name, $user);
        return $this->db->insert_id();
    }

    function update($id, $user){
        $this->db->where('id', $id);
        $this->db->update($this->tbl_name, $user);
    }

    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->tbl_name);
    }

    function generate_password() {
        $password = "";
        $pool = "qwertzupasdfghkyxcvbnm23456789";
        srand ((double)microtime()*1000000);
        for($n = 0; $n <= 7; $n++)
            $password .= substr($pool,(rand()%(strlen ($pool))), 1);
        return $password;
    }

    function generate_username($prefix) {
        $username = $prefix;
        $pool = strtoupper("qwertzupasdfgkyxcvbnm");
        srand ((double)microtime()*1000000);
        for($n = 0; $n < 4; $n++)
            $username .= substr($pool,(rand()%(strlen ($pool))), 1);
        $username .= '_';
        $pool = strtoupper("123456789");
        srand ((double)microtime()*1000000);
        for($n = 0; $n < 4; $n++)
            $username .= substr($pool,(rand()%(strlen ($pool))), 1);
        $result = $this->get_by_username($username);
        if ( $result->num_rows > 0 )
            $username = $this->generate_username($prefix);
        return $username;
    }

}
?>