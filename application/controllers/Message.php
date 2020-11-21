<?php 

class Message extends CI_Controller {

    //This index function redirect the user from the Login page to the Post view

        public function index() {

        /*print_r($this->session->all_userdata());*/
    
        if ($this->session->username == "") {
            $this->load->view('Login');
        }
    
        else {
            $this->load->view('Post');
        }
    }

    //This doPost function redirct users to the Login page if its empty, else it loads this model and add the login user to the database/viewMessage page

public function doPost() {
        if ($this->session->username == "") {
            $this->load->view('Login');
        }    

        else {
            $this->load->model('Messages_model');
            $poster = $this->session->username;
            $string = $this->input->post('message-box');
            $this->Messages_model->insertMessage($poster, $string);
    
            redirect('/user/view/' . $poster);
    
        }
    }
}
