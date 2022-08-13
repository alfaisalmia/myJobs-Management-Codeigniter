<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function index() {
        redirect(base_url(), "refresh");
    }

    public function apply_jobs() {

        // echo 'ok';
        $jobid = $this->input->post("jobid", TRUE);
        $myid = $this->session->userdata("id");
        //echo $myid ;
        if ($myid == NULL) {
            redirect(base_url(), "refresh");
        } else {
            $data = array(
                "juserid" => $myid,
                "jobsid" => $jobid
            );
            if ($this->am->Save("apply", $data)) {
                echo "Apply successful";
            } else {
                echo "some error occers";
            }
        }
    }

    public function remove_jobs(){
        $jobid = $this->input->post("jobid", TRUE);
        $myid = $this->session->userdata("id");
        if ($myid == NULL) {
            redirect(base_url(), "refresh");
        } else {
            $data = array(
                "juserid" => $myid,
                "jobsid" => $jobid
            );
            if($this->am->Delete("apply", $data)){
                echo "Remove Successful";
            }
            else{
                echo "Some error occurs";
            }
        }
    }

}
