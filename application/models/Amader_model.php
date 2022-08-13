<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Amader_model extends CI_Model {

    public $Id;

    public function Save($table, $data) {
        if ($this->db->insert($table, $data)) {
            $this->Id = $this->db->insert_id();
            return TRUE;
        }
        return FALSE;
    }

    public function Update($table, $data, $where) {
        $this->db->where($where);
        if ($this->db->update($table, $data)) {
            $this->Id = $this->db->insert_id();
            return TRUE;
        }
        return FALSE;
    }

    public function Delete($table, $where) {
        $this->db->where($where);
        $this->db->delete($table);
        if ($this->db->affected_rows()) {
            return TRUE;
        }
        return FALSE;
    }

    public function view($select, $table, $where = NULL, $order = NULL) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($select);
        $this->db->from($table);
        // $data = $this->db->get();
        //$x = $this->db->get()->result();
        $this->db->order_by($order[0], $order[1]);
        return $this->db->get()->result();
    }

    public function home() {
        return $this->GetMultipleQueryResult("CALL home()");
    }

    public function category($id, $start, $per_page) {
        return $this->GetMultipleQueryResult("CALL category($id, $start, $per_page)");
    }

//, $userid
    public function details($id, $userid) {
        return $this->GetMultipleQueryResult("CALL details($id, $userid)");
    }

    public function search($title) {
        $this->db->select("jobs.*, job_category.id catid, job_category.name");
        $this->db->from("jobs");
        $this->db->join("jobs_category", "jobs_category.jobsid=jobs.id");
        $this->db->join("job_category", "jobs_category.categoryid=job_category.id");
        $this->db->like("jobs.title", $title);
        $this->db->order_by("jobs.id", "desc");
        $this->db->group_by("jobs.id");
        return $this->db->get()->result();
    }

    public function GetMultipleQueryResult($queryString) {
        if (empty($queryString)) {
            return false;
        }
        $index = 0;
        $ResultSet = array();
        if (mysqli_multi_query($this->db->conn_id, $queryString)) {
            do {
                if (false != $result = mysqli_store_result($this->db->conn_id)) {
                    $rowID = 0;
                    while ($row = $result->fetch_object()) {
                        $ResultSet[$index][$rowID] = $row;
                        $rowID++;
                    }
                }
                $index++;
            } while (mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        }
        return $ResultSet;
    }

    public function UploadImg($dest, $name, $field) {
        $this->load->library('upload');
        $config['upload_path'] = "./{$dest}";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '10000';
        $config['max_width'] = '3000';
        $config['max_height'] = '4000';
        $config['file_name'] = $name;
        $this->upload->initialize($config); //upload image data
        $this->upload->do_upload($field);
    }

}
