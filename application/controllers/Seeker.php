<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Seeker extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // $type = $this->session->userdata("type");
//        if ($type == "u") {
//            redirect(base_url(). "seeker/profile",  "refresh");
////           // redirect(base_url() . "corporate/profile", "refresh");
//       }
    }

    public function login() {

        $data = array();
        $data['title'] = "Login";
        $this->load->library("form_validation");
        $log = $this->input->post("log", TRUE);
        if ($log != NULL) {

            $this->form_validation->set_rules("email", "Email", "required|valid_email");
            $this->form_validation->set_rules("password", "Password", "required|min_length[3]|max_length[15]");

            if ($this->form_validation->run() == TRUE) {
                $arr = array(
                    "email" => $this->input->post("email", TRUE),
                    "password" => md5($this->input->post("password", TRUE)),
                );
                $temp = $this->am->view("id, type", "juser", $arr);
                // print_r($temp);
                if ($temp) {
                    foreach ($temp as $value) {
                        $sess = array(
                            "id" => $value->id,
                            "type" => $value->type
                        );
                        $this->session->set_userdata($sess);
                        redirect(base_url() . "seeker/profile", "refresh");
                    }
                } else {
                    $this->session->set_userdata(array("msg" => "invalid Email or Password"));
                    $data['content'] = $this->load->view("seeker/login", $data, TRUE);
                    $this->load->view("master", $data);
                }
            } else {

                $data['content'] = $this->load->view("seeker/login", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {

            $data['content'] = $this->load->view("seeker/login", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

    public function register() {
        $data = array();
        $data['title'] = "Register";
        $this->load->library("form_validation");

        $reg = $this->input->post("reg", TRUE);
        if ($reg != NULL) {
            $this->form_validation->set_rules("first_name", "First Name", "trim|required|alpha_numeric_spaces|min_length[3]");
            $this->form_validation->set_rules("last_name", "Last_name", "trim|required|alpha_numeric_spaces|min_length[3]");
            $this->form_validation->set_rules("email", "Email", "required|valid_email");
            $this->form_validation->set_rules("password", "Password", "required");
            // $this->form_validation->set_rules("type", "Type", "required");
            $this->form_validation->set_rules("father", "Father", "required");
            $this->form_validation->set_rules("mother", "Mother", "required");
            $this->form_validation->set_rules("dob", "dob", "trim|required");
            $this->form_validation->set_rules("gender", "Gender", "required");
            $this->form_validation->set_rules("marital", "Marital status", "required");
            $this->form_validation->set_rules("national_id", "National_Id", "required");
            $this->form_validation->set_rules("religion", "Religion", "required");
            $this->form_validation->set_rules("pre_address", "Pre_address", "required");
            $this->form_validation->set_rules("per_address", "Per_address", "required");
            $this->form_validation->set_rules("mobile", "Mobile", "required");
            //$this->form_validation->set_rules("picture", "Picture", "required");
            $this->form_validation->set_rules("summary", "Summary", "required");
            $this->form_validation->set_rules("objective", "Objective", "required");
            $this->form_validation->set_rules("special", "Special", "required");
            $this->form_validation->set_rules("keyword", "Keyword", "required");





            if ($this->form_validation->run() == TRUE) {
                //echo 'Saved';
                $ext = "";
                if ($_FILES['picture']['name']) {
                    $ext = pathinfo($_FILES['picture']['name']);
                    $ext = $ext['extension'];
                }
                $sdata = array(
                    "first_name" => $this->input->post("first_name", TRUE),
                    "last_name" => $this->input->post("last_name", TRUE),
                    "email" => ($this->input->post("email", TRUE)),
                    "password" => md5($this->input->post("password", TRUE)),
                    "father" => $this->input->post("father", TRUE),
                    "mother" => $this->input->post("mother", TRUE),
                    "dob" => $this->input->post("dob", TRUE),
                    "gender" => ($this->input->post("gender", TRUE)),
                    "marital" => $this->input->post("marital", TRUE),
                    "national_id" => $this->input->post("national_id", TRUE),
                    "religion" => $this->input->post("religion", TRUE),
                    "pre_address" => $this->input->post("pre_address", TRUE),
                    "per_address" => $this->input->post("per_address", TRUE),
                    "mobile" => $this->input->post("mobile", TRUE),
                    "picture" => $ext,
                    "objective" => $this->input->post("objective", TRUE),
                    "summary" => $this->input->post("summary", TRUE),
                    "special" => $this->input->post("special", TRUE),
                    "keyword" => $this->input->post("keyword", TRUE),
                    "type" => "u"
                );
                if ($this->am->save("juser", $sdata)) {
                    $id = $this->am->Id;
//                    $sdata['success'] = "Saved Successfull";
//                    die();
                    $sess = array(
                        "id" => $id,
                        "type" => "u"
                    );
                    $this->session->set_userdata($sess);
                    //redirect(base_url() . "seeker/profile", "refresh");
                    if ($ext) {
                        $this->am->UploadImg("images/profile/", "user-{$id}.{$ext}", "picture");
                    }

                    redirect(base_url() . "seeker/profile", "refresh");
                } else {
                    $sdata['error'] = "Error Successfull";
                }

                $data['content'] = $this->load->view("seeker/register", $data, TRUE);
                $this->load->view("master", $data);
            } else {

                $data['content'] = $this->load->view("seeker/register", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {



//        echo "<pre>";
//        print_r($data['allIndustry']);
//        echo "</pre>";
            $data['content'] = $this->load->view("seeker/register", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

    public function register_edit() {
        $data = array();
        $data['title'] = "Edit Resume";
        $this->load->library("form_validation");
        $id = $this->session->userdata("id");
        $data['allUser'] = $this->am->view("*", "juser", array("id" => $id));
        $data['content'] = $this->load->view("seeker/register_edit", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function register_update() {
        $id = $this->session->userdata("id");
        //$id = $this->input->post("id");

        $selJob = $this->am->view("picture", "juser", array("id" => $id));
        foreach ($selJob as $value) {
            $old_ext = $value->picture;
        }


        if ($_FILES['picture']['name']) {
            $ext = pathinfo($_FILES['picture']['name']);
            $ext = $ext['extension'];

            if ($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "jpeg") {
                if (file_exists("images/profile/user-{$id}.{$old_ext}")) {
                    unlink("images/profile/user-{$id}.{$old_ext}");
                }

                $this->am->UploadImg("images/profile/", "user-{$id}.{$ext}", "picture");
            } else {
                $ext = $old_ext;
            }
        } else {
            $ext = $old_ext;
        }



        $sdata = array(
            "first_name" => $this->input->post("first_name", TRUE),
            "last_name" => $this->input->post("last_name", TRUE),
            "email" => ($this->input->post("email", TRUE)),
            "password" => md5($this->input->post("password", TRUE)),
            "father" => $this->input->post("father", TRUE),
            "mother" => $this->input->post("mother", TRUE),
            "dob" => $this->input->post("dob", TRUE),
            "gender" => ($this->input->post("gender", TRUE)),
            "marital" => $this->input->post("marital", TRUE),
            "national_id" => $this->input->post("national_id", TRUE),
            "religion" => $this->input->post("religion", TRUE),
            "pre_address" => $this->input->post("pre_address", TRUE),
            "per_address" => $this->input->post("per_address", TRUE),
            "mobile" => $this->input->post("mobile", TRUE),
            "picture" => $ext,
            "objective" => $this->input->post("objective", TRUE),
            "summary" => $this->input->post("summary", TRUE),
            "special" => $this->input->post("special", TRUE),
            "keyword" => $this->input->post("keyword", TRUE),
            "type" => "u"
        );

//        echo '<pre>';
//        print_r($sdata);
//        echo '</pre>';
//        die();
        if ($this->am->Update("juser", $sdata, array("id" => $id)))
            ;

        redirect(base_url() . "seeker/profile", "refresh");
        //controller=industry, then page name
    }

    public function view_resume() {
        $data = array();
        $data['title'] = "Resume-view";
        //$this->load->library("form_validation");
        $data['allJuser'] = $this->am->view("*", "juser", "", array("id", "desc"));
        $data['content'] = $this->load->view("seeker/view_resume", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function profile() {

        //echo 'ok';
        $id = $this->session->userdata("id");
        // echo $id;
        $data = array();
        //$id = $this->uri->segment(1);

        $data['title'] = "profile";
        $this->load->library("form_validation");
        $data['allAcademic'] = $this->am->view("*", "qualification", array("id" => $id));

//       echo "<pre>";
//       print_r($data['allAcademic']);
//       echo "</pre>";

        $data['content'] = $this->load->view("seeker/profile", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function poly() {
        echo 'OK';
    }

    public function qualification_profile() {

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
                        redirect(base_url() . "seeker/profile", "refresh");
                    }
                } else {
                    echo 'error';
                    redirect(base_url() . "seeker/profile");
                }
                $data['content'] = $this->load->view("seeker/qualification_profile", $data, TRUE);
                $this->load->view("master", $data);
            } else {
                $data['content'] = $this->load->view("seeker/qualification_profile", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {
            $data['content'] = $this->load->view("seeker/qualification_profile", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

//qualification edit start
    public function qualification_profile_edit() {
        $data = array();
        $data['title'] = "Edit profile Qualification";
        $this->load->library("form_validation");
        $id = $this->session->userdata("id");
        $data['allEducation'] = $this->am->view("*", "level_of_education", "", array("name", "asc"));
        $data['allResult'] = $this->am->view("*", "result", "", array("name", "asc"));
        $data['allAcap'] = $this->am->view("*", "academic_qualification", array("juserid" => $id));
        $data['content'] = $this->load->view("seeker/qualification_profile_edit", $data, TRUE);
        $this->load->view("master", $data);
    }

    //qualification update

    public function qualification_update() {
        $id = $this->session->userdata("id");
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
        redirect(base_url() . "seeker/profile", "refresh");

        //controller=industry, then page name
    }

}
