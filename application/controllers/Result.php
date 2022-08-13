
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");
        if ($type != "u") {
            redirect(base_url(), "refresh");
        }
    }

    public function index(){
        $data = array();
        $data['title'] = "Result";
        $this->load->library("form_validation");
        $go = $this->input->post("save", TRUE);
        if ($go != NULL) {
            $this->form_validation->set_rules("name", "Name", "required");

            if ($this->form_validation->run() == TRUE) {
                $sdata = array(
                    "name" => $this->input->post("name", TRUE)
                );
                if ($this->am->Save("result", $sdata)) {
                    $id = $this->am->Id;
                    if ($id) {
                        //echo 'Save Succesfully';
                        redirect(base_url() . "seeker/result", "refresh");
                    }
                } else {
                    echo 'error';
                    redirect(base_url() . "seeker/result");
                }
                $data['content'] = $this->load->view("seeker/result", $data, TRUE);
                $this->load->view("master", $data);
            } else {
                $data['content'] = $this->load->view("seeker/result", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {
            $data['content'] = $this->load->view("seeker/result", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

    public function result_view() {
        $data = array();
        $data['title'] = "Result view";
        $this->load->library("form_validation");
        $data['allIndustry'] = $this->am->view("*", "result", "", array("id", "desc"));
        $data['content'] = $this->load->view("seeker/result_view", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function edit($id) {

        $data = array();
        $data['title'] = "Edit Result";
        $this->load->library("form_validation");
        $data['selIndustry'] = $this->am->view("*", "result", array("id" => $id));
        $data['content'] = $this->load->view("seeker/result-edit", $data, TRUE);
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
        if ($this->am->Update("result", $sdata, array("id" => $id)))
            ;
        redirect(base_url() . "result/result_view", "refresh");

        //controller=industry, then page name
    }

    public function Delete($id) {
        $this->am->Delete("result", array("id" => $id));
        redirect(base_url() . "result/result_view", "refresh");
        //folder=admin, then page
    }

}
