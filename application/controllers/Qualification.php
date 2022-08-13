
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Qualification extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");
        if ($type != "u") {
            redirect(base_url(), "refresh");
        }
    }

    public function index() {
//        echo 'ok';
        $data = array();
        $data['title'] = "Qualification";
        $this->load->library("form_validation");
        $data['allEducation'] = $this->am->view("*", "level_of_education", "", array("name", "asc"));
        $data['allResult'] = $this->am->view("*", "result", "", array("name", "asc"));
        $go = $this->input->post("save", TRUE);
        if ($go != NULL) {
            //$this->form_validation->set_rules("juserid", "Juserid", "required");
            $this->form_validation->set_rules("level_of_educationid", "Level_of_educationid", "required|greater_than[0]");
            $this->form_validation->set_rules("exam_title", "Exam_title", "required");
            $this->form_validation->set_rules("subject", "Subject", "required");
            $this->form_validation->set_rules("institute", "Institute", "required");
            $this->form_validation->set_rules("resultid", "Resultid", "required");
            $this->form_validation->set_rules("marks", "Marks", "required");
            $this->form_validation->set_rules("cgpa", "Cgpa", "required");
            $this->form_validation->set_rules("scale", "Scale", "required");
            $this->form_validation->set_rules("passing_year", "Passing_year", "required");
            $this->form_validation->set_rules("duration", "Duration", "required");
            $this->form_validation->set_rules("achivements", "Achivements", "required");

            if ($this->form_validation->run() == TRUE) {
                $sdata = array(
                    "juserid" => $this->session->userdata("id"),
                    "level_of_educationid" => $this->input->post("level_of_educationid", TRUE),
                    "exam_title" => $this->input->post("exam_title", TRUE),
                    "subject" => $this->input->post("subject", TRUE),
                    "institute" => $this->input->post("institute", TRUE),
                    "resultid" => $this->input->post("resultid", TRUE),
                    "marks" => $this->input->post("marks", TRUE),
                    "cgpa" => $this->input->post("cgpa", TRUE),
                    "scale" => $this->input->post("scale", TRUE),
                    "passing_year" => $this->input->post("passing_year", TRUE),
                    "duration" => $this->input->post("duration", TRUE),
                    "achivements" => $this->input->post("achivements", TRUE),
                );
                if ($this->am->Save("academic_qualification", $sdata)) {
                    $id = $this->am->Id;

                    if ($id) {
                        echo 'Save Succesfully';
                        redirect(base_url() . "seeker/qualification", "refresh");
                    }
                } else {
                    echo 'error';
                    redirect(base_url() . "seeker/qualification");
                }
                $data['content'] = $this->load->view("seeker/qualification", $data, TRUE);
                $this->load->view("master", $data);
            } else {
                $data['content'] = $this->load->view("seeker/qualification", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {
            $data['content'] = $this->load->view("seeker/qualification", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

    public function qualification_view() {
        $data = array();
        $data['title'] = "Qualification view";
        $this->load->library("form_validation");
        $data['allEducation'] = $this->am->view("*", "level_of_education", "", array("name", "asc"));
        $data['allResult'] = $this->am->view("*", "result", "", array("name", "asc"));

        $data['allQualification'] = $this->am->view("*", "academic_qualification", "", array("id", "desc"));
        $data['content'] = $this->load->view("seeker/qualification_view", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function edit($id) {

        $data = array();
        $data['title'] = "Edit Qualification";
        $this->load->library("form_validation");
        $data['allEducation'] = $this->am->view("*", "level_of_education", "", array("name", "asc"));
        $data['allResult'] = $this->am->view("*", "result", "", array("name", "asc"));

        $data['allAcademic'] = $this->am->view("*", "academic_qualification", array("id" => $id));

        $data['content'] = $this->load->view("seeker/qualification-edit", $data, TRUE);
        $this->load->view("master", $data);
        //echo $id;
    }

    public function update() {
        $id = $this->input->post("id");
        $sdata = array(
            "juserid" => $this->session->userdata("id"),
            "level_of_educationid" => $this->input->post("level_of_educationid", TRUE),
            "exam_title" => $this->input->post("exam_title", TRUE),
            "subject" => $this->input->post("subject", TRUE),
            "institute" => $this->input->post("institute", TRUE),
            "resultid" => $this->input->post("resultid", TRUE),
            "marks" => $this->input->post("marks", TRUE),
            "cgpa" => $this->input->post("cgpa", TRUE),
            "scale" => $this->input->post("scale", TRUE),
            "passing_year" => $this->input->post("passing_year", TRUE),
            "duration" => $this->input->post("duration", TRUE),
            "achivements" => $this->input->post("achivements", TRUE),
        );

//        echo '<pre>';
//        print_r($sdata);
//        echo '</pre>';
//        die();
        if ($this->am->Update("academic_qualification", $sdata, array("id" => $id)))
            ;
        redirect(base_url() . "qualification/qualification_view", "refresh");

        //controller=industry, then page name
    }

    public function Delete($id) {
        $this->am->Delete("academic_qualification", array("id" => $id));
        redirect(base_url() . "qualification/qualification_view", "refresh");
        //folder=admin, then page
    }

}
