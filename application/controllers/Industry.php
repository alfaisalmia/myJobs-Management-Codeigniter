
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Industry extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");
        if ($type != "a") {
            redirect(base_url(), "refresh");
        }
    }

    public function index() {
        $data = array();
        $data['title'] = "Industry";
        $this->load->library("form_validation");
        $go = $this->input->post("save", TRUE);
        if ($go != NULL) {
            $this->form_validation->set_rules("name", "Name", "required");

            if ($this->form_validation->run() == TRUE) {
                $sdata = array(
                    "name" => $this->input->post("name", TRUE)
                );
                if ($this->am->Save("industry", $sdata)) {
                    $id = $this->am->Id;
                    if ($id) {
                        echo 'Save Succesfully';
                        redirect(base_url() . "admin/industry", "refresh");
                    }
                } else {
                    echo 'error';
                    redirect(base_url() . "admin/industry");
                }
                $data['content'] = $this->load->view("admin/industry", $data, TRUE);
                $this->load->view("master", $data);
            } else {
                $data['content'] = $this->load->view("admin/industry", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {
            $data['content'] = $this->load->view("admin/industry", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

    public function industry_view() {
        $data = array();
        $data['title'] = "industry_view";
        $this->load->library("form_validation");
        $data['allIndustry'] = $this->am->view("*", "industry", "", array("id", "desc"));
        $data['content'] = $this->load->view("admin/industry_view", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function edit($id) {

        $data = array();
        $data['title'] = "Edit Industr";
        $this->load->library("form_validation");
        $data['selIndustry'] = $this->am->view("*", "industry", array("id" => $id));
        $data['content'] = $this->load->view("admin/industry-edit", $data, TRUE);
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
        if ($this->am->Update("industry", $sdata, array("id" => $id)))
            ;
        redirect(base_url() . "industry/industry_view", "refresh");

        //controller=industry, then page name
    }

    public function Delete($id) {
        $this->am->Delete("industry", array("id" => $id));
        redirect(base_url() . "industry/industry_view", "refresh");
        //folder=admin, then page
    }

}
