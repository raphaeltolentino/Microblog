<?php

class Users_model extends CI_Model {

    //This function checks the login information. If the information is correct it allows the user into the microblog

    public function checkLogin($username, $pass) {
        $this->load->helper('security');
        $cPassword = do_hash($pass, 'sha1');

        $this->db->select('username', 'password');
        $this->db->from('Users');
        $this->db->where('username', $username);
        $this->db->where('password', $cPassword);

        // This code gets the code in the database and display in a table

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        }
        else {
            return false;
        }
    }
}