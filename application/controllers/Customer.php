<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");
        if ($type != "e") {
            redirect(base_url(), "refresh");
        }
    }

    public function profile() {

        $data = array();
        $data['title'] = "Profile";
        //$this->load->library("form_validation");
        $data['content'] = $this->load->view("corporate/profile", $data, TRUE);
        $this->load->view("master", $data);
        
    }

}
