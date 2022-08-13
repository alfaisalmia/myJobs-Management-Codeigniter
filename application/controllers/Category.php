<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");
        if ($type != "a") {
            redirect(base_url(), "refresh");
        }
    }

    public function index() {
        echo 'ok';
//           $data = array();
//        $data['title'] = "Category";
//        //$this->load->library("form_validation");
//        $data['alljobs'] = $this->am->view("*", "job_category", "", array("id", "desc"));
//        $data['content'] = $this->load->view("admin/category", $data, TRUE);
//        $this->load->view("master", $data);
    }

}
