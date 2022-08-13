
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $type = $this->session->userdata("type");
        if ($type != "a") {
            redirect(base_url(), "refresh");
        }
    }

    public function index() {
        $data = array();
        $data['title'] = "Location";
        $this->load->library("form_validation");
        $go = $this->input->post("save", TRUE);
        if ($go != NULL) {
            $this->form_validation->set_rules("name", "Name", "required");

            if ($this->form_validation->run() == TRUE) {
                $sdata = array(
                    "name" => $this->input->post("name", TRUE)
                );
                if ($this->am->Save("location", $sdata)) {
                    $id = $this->am->Id;
                    if ($id) {
                        echo 'Save Succesfully';
                        redirect(base_url() . "admin/location", "refresh");
                    }
                } else {
                    echo 'error';
                    redirect(base_url() . "admin/location");
                }
                $data['content'] = $this->load->view("admin/location", $data, TRUE);
                $this->load->view("master", $data);
            } else {
                $data['content'] = $this->load->view("admin/location", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {
            $data['content'] = $this->load->view("admin/location", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

    public function location_view() {
        $data = array();
        $data['title'] = "Location-view";
        //$this->load->library("form_validation");
        $data['allLocation'] = $this->am->view("*", "location", "", array("id", "desc"));
        $data['content'] = $this->load->view("admin/location_view", $data, TRUE);
        $this->load->view("master", $data);
    }
    
    
    public function edit($id) {
       
        $data = array();
        $data['title'] = "Edit Location";
        $this->load->library("form_validation");
        $data['selLocation'] = $this->am->view("*", "location", array("id"=>$id));
        $data['content'] = $this->load->view("admin/location-edit", $data, TRUE);
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
        if ($this->am->Update("location", $sdata, array("id" => $id))); 
redirect(base_url() . "admin/location_view", "refresh");
           
        

    
    }
    public function Delete($id) {
        $this->am->Delete("location", array("id" => $id));
        redirect(base_url() . "admin/location_view", "refresh");
        }

}
