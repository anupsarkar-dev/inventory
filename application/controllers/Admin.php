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
}
