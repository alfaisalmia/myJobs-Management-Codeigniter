
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $type = $this->session->userdata("type");
        if ($type == "e") {
            redirect(base_url() . "corporate/profile", "refresh");
        }
    }

    public function index() {
        redirect(base_url(), "refresh");
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
                $temp = $this->am->view("id, type", "employer", $arr);
                // print_r($temp);
                if ($temp) {
                    foreach ($temp as $value) {
                        $sess = array(
                            "id" => $value->id,
                            "type" => $value->type
                        );
                        $this->session->set_userdata($sess);
                        redirect(base_url() . "corporate/profile", "refresh");
                    }
                } else {
                    $this->session->set_userdata(array("msg" => "invalid Email or Password"));
                    $data['content'] = $this->load->view("corporate/login", $data, TRUE);
                    $this->load->view("master", $data);
                }
            } else {

                $data['content'] = $this->load->view("corporate/login", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {

            $data['content'] = $this->load->view("corporate/login", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

    public function register() {
        $data = array();
        $data['title'] = "Register";
        //$this->load->model("amader_model", "am",true);
        //$this->am->view();
        $this->load->library("form_validation");
         $data['allIndustry'] = $this->am->view("*", "industry", "", array("name", "asc"));
        $reg = $this->input->post("reg", TRUE);
        if ($reg != NULL) {
            $this->form_validation->set_rules("fullname", "Full Name", "trim|required|alpha_numeric_spaces|min_length[3]");
            //$this->form_validation->set_rules("fullname", "Full Name", "trim|required|alpha_numeric_spaces|min_length[3]");
            $this->form_validation->set_rules("email", "Email", "required|valid_email");
            $this->form_validation->set_rules("password", "Password", "required|min_length[3]|max_length[15]");
            $this->form_validation->set_rules("repassword", "Retype password", "required|matches[password]");
            $this->form_validation->set_rules("industryid", "Industry", "required|greater_than[0]");
            $this->form_validation->set_rules("contact", "Contact", "required");
            $this->form_validation->set_rules("company", "Company", "required");

            if ($this->form_validation->run() == TRUE) {
                //echo 'Saved';
                $sdata = array(
                    "name" => $this->input->post("fullname", TRUE),
                    "email" => $this->input->post("email", TRUE),
                    "password" => md5($this->input->post("password", TRUE)),
                    "contact" => $this->input->post("contact", TRUE),
                    "company_name" => $this->input->post("company", TRUE),
                    "industryid" => $this->input->post("industryid", TRUE),
                    "type" => "e"
                );
                if ($this->am->save("employer", $sdata)) {
                    echo $this->am->Id;
//                    $sdata['success'] = "Saved Successfull";
//                    die();
                    $sess = array(
                        "id" => $this->am->Id,
                        "type" => "e"
                    );
                    $this->session->set_userdata($sess);
                    redirect(base_url() . "corporate/profile", "refresh");
                } else {
                    $sdata['error'] = "Error Successfull";
                }
                $data['allIndustry'] = $this->am->view("*", "industry", "", array("name", "asc"));
                $data['content'] = $this->load->view("corporate/register", $data, TRUE);
                $this->load->view("master", $data);
            } else {
                // $this->form_validation->set_message('industryid', 'Please choose the Industry ');
                $data['allIndustry'] = $this->am->view("*", "industry", "", array("name", "asc"));
                $data['content'] = $this->load->view("corporate/register", $data, TRUE);
                $this->load->view("master", $data);
            }
        } else {


           
//        echo "<pre>";
//        print_r($data['allIndustry']);
//        echo "</pre>";
            $data['content'] = $this->load->view("corporate/register", $data, TRUE);
            $this->load->view("master", $data);
        }
    }

}
