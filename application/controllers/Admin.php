<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() 
  {
    parent::__construct();

    if (!isset($_SESSION['admin_email'])) {
       redirect('account');
    }
   
  }
  
	public function index()
	{
	
		$this->load->view('dashboard');
	}


	public function dsr()
	{
		$data['dsr']=$this->stocks_model->get_dsr();
		$data['current']="dsr";
	
		$this->load->view('dsr/get',$data);
	}

	public function dsr_add()
	{
		$data['current']="dsr";
		$this->load->view('dsr/add',$data);
	}



  public function dsr_create()
  {

    // get the posted values


    $this->form_validation->set_rules("txt_dsr_name", "DSR name", "trim|required|min_length[3]|max_length[300]");

    $this->form_validation->set_rules("txt_dsr_id", "DSR ID", "trim|min_length[2]|max_length[100]");



    $name = $this->input->post("txt_dsr_name");
    $id = $this->input->post("txt_dsr_id");

   

    if ($this->form_validation->run() == FALSE)
    {

      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">
       '.validation_errors().'</div>');

     

   
      $this->load->view('dsr/add ');
    }
    else
    {

      // validation succeeds

      
        $data = array(
          'dsr_name' => $name,
          'dsr_id' => $id,
            
       
        );

        // check if username and password is correct

        $result = $this->stocks_model->insert_dsr($data);
        if (result) //active user record is present
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">A New DSR has added !</div>');
          redirect('admin/dsr');
        }
        else
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">insert Failed . Unknown Error ! </div>');
          $this->load->view('dsr/dsr_add');
        }
      
    }
  }




}
