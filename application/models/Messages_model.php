<?php

class Messages_model extends CI_Model {

    //This loads the database to this model

     public function __construct() {
        $this->load->database();
    }

    //This returns all messages by a user with a specific username, with the most recently first


    public function getMessagesByPoster($name) {
        $sql = "SELECT * FROM Messages WHERE user_username = ? ORDER BY posted_at DESC";
        $query = $this->db->query($sql, array($name));
        return $query->result_array();
    }


    //This returns all messages with a specific string choice, with the most recently first

     public function searchMessages($string) {
        $sql = "SELECT * FROM Messages WHERE text LIKE ? ORDER BY posted_at DESC";
        $query = $this->db->query($sql, array('%'.$string.'%'));
        return $query->result_array();
    }

    //This code adds the messages and its content to the database

    public function insertMessage($poster, $string) {
        $sql = "INSERT INTO Messages (user_username, text, posted_at) VALUES (?, ?, CURRENT_TIMESTAMP())";
        $this->db->query($sql, array($poster, $string));
    }


}