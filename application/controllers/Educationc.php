<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Educationc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");
        if ($type != "u") {
            redirect(base_url(), "refresh");
        }
    }

    public function index() {
        //echo 'ok';
        $data = array();
        $data['title'] = "Level of Education";
        $this->load->library("form_validation");
        $go = $this->input->post("reg", TRUE);

        if ($go != NULL) {
            $this->form_validation->set_rules("name", "Name", "required");

            if ($this->form_validation->run() == TRUE) {
                $sdata = array(
                    "name" => $this->input->post("name", TRUE)
                );
                if ($this->am->Save("level_of_education", $sdata)) {
                    $id = $this->am->Id;
                    if ($id) {
                        echo 'Save Succesfully';
                        redirect(base_url() . "seeker/education", "refresh");
                    }
                } else {
                    echo 'error';
                    redirect(base_url() . "seeker/education");
                }
                $data['content'] = $this->load->view("seeker/education", $data, TRUE);
                $this->load->view("master", $data);
            } else {
                $data['content'] = $this->load->view("seeker/education", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {
            $data['content'] = $this->load->view("seeker/education", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

    public function education_view() {
        $data = array();
        $data['title'] = "Education view";
        $this->load->library("form_validation");
        $data['allIndustry'] = $this->am->view("*", "level_of_education", "", array("id", "desc"));
        $data['content'] = $this->load->view("seeker/education_view", $data, TRUE);
        $this->load->view("master", $data);
    }
    
      public function edit($id) {

        $data = array();
        $data['title'] = "Edit Education";
        $this->load->library("form_validation");
        $data['allIndustry'] = $this->am->view("*", "level_of_education", array("id" => $id));
        $data['content'] = $this->load->view("seeker/education-edit", $data, TRUE);
        $this->load->view("master", $data);
        //echo $id;
    }

    public function update() {
        $id = $this->input->post("id");
        $sdata = array(
            "name" => $this->input->post("name", TRUE),
        );

//        echo '<pre>';
//        print_r($sdata);
//        echo '</pre>';
//        die();
        if ($this->am->Update("level_of_education", $sdata, array("id" => $id)))
            ;
        redirect(base_url() . "educationc/education_view", "refresh");

        //controller=industry, then page name
    }

    public function Delete($id) {
        $this->am->Delete("level_of_education", array("id" => $id));
        redirect(base_url() . "educationc/education_view", "refresh");

    //echo 'ok';
    }
}
