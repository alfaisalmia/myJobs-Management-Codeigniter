<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Myjobs extends CI_Controller {

    public function index() {

        $data = array();
        $data['baner1'] = 1;
        $data['title'] = "My jobs";
        $data['allData'] = $this->am->home(); //home page jobs show korar jonno call korte hoy->home amader controller akta mehod create korte hobe
        /* echo '<pre>';
          print_r($data);
          echo '</pre>'; */
        $data['alljobs'] = $this->am->view("*", "jobs", "", array("id", "desc"));
        $data['content'] = $this->load->view("front/home", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function category() {

        $data = array();
        $id = $this->uri->segment(2);
        $data['title'] = "My jobs";
        //$data['allData'] = $this->am->category($id); //home page jobs show korar jonno call korte hoy->home amader controller akta mehod create korte hobe
//         echo '<pre>';
//          print_r($data);
//          echo '</pre>'; 
        //#####pagination ar kaj start######

        $config['base_url'] = base_url() . $this->uri->segment(1) . "/$id";
        $start = 0;
        $page = $this->uri->segment(3);
        if ($start != NULL) {
            $start = $page;
        }
        $config["uri_segment"] = 3;
        $config['per_page'] = 1;

        $data['allData'] = $this->am->category($id, $start, $config['per_page']);
//         echo '<pre>';
//          print_r($data);
//         echo '</pre>'; 
        $this->load->library('pagination');
        foreach ($data['allData'][1] as $value) {
            $config['total_rows'] = $value->totaljobs;
        }
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul><!--pagination-->';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>' . "\n";
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>' . "\n";
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>' . "\n";
        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>' . "\n";
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>' . "\n";

        $this->pagination->initialize($config);


        //#####pagination ar kaj start######
        $data['content'] = $this->load->view("front/category", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function details() {

        $data = array();
        //$data['title'] = "poly";
        $id = $this->uri->segment(3);

        $userid = 0;
        $type = $this->session->userdata("type");

        if ($type == "u") {
            $userid = $this->session->userdata("id");
        }

        $data['allData'] = $this->am->details($id, $userid);

//        echo '<pre>';
//        print_r($data["allData"]);
//        echo '</pre>';

        foreach ($data['allData'][0] as $value) {
            $data['title'] = $value->title;
            break;
        }

        $data['content'] = $this->load->view("front/details", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function logout() {
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("type");
        redirect(base_url() . "corporate/register", "refresh");
    }

    public function search() {
        $data = array();
        $title = trim($this->input->get("title", TRUE));
        $data['title'] = "Search by" . ucfirst($title);
        $data['allData'] = $this->am->search($title);

//        echo '<pre>';
//        print_r($data["allData"]);
//        echo '</pre>';
//        die();

        $data['content'] = $this->load->view("front/search", $data, TRUE);
        $this->load->view("master", $data);
    }

}
