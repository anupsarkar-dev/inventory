<?php

/**
 * @property  email
 */
class student_model extends CI_Model
{
	function __construct()
    {
		$this->load->library('email');
        // Call the Model constructor
        parent::__construct();
    }
	

function insertStudent($data)
    {
        return $this->db->insert('students', $data);
    }

	//insert into user table
	function insertDepatment($data)
    {
		return $this->db->insert('departments', $data);
	}

	 public function getDepartments()
    {
        $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record

        $sql=$this->db->get("departments");
        $result=$sql->result();

        return $result;
    }



}