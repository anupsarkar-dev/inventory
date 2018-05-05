<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	
 function __construct() 
  {
    parent::__construct();

    
   
  }


	public function index()
	{
	
		//$this->load->view('dashboard');
		if (isset($_SESSION['admin_email'])) {
       redirect('admin');
    }
		$this->load->view('account/login');
	}


	public function signup()
	{
	
		$this->load->view('account/register');
	}



	public function logout()
	{
		unset($_SESSION['admin_email']);
		$this->session->sess_destroy();
		redirect("account");
	}

	 public function validate()
     {
          //get the posted values
          $email = $this->input->post("txt_email");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_email", "Email", "trim|required|valid_email");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
              // $this->load->view('login');
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">validation Failed !</div>');
                         redirect('account');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->account_model->user_validate($email, $password);

                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'admin_email' => $email,
                              'type' => 'admin',
                          
                              'is_admin_login' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">successfully logged in your account!</div>');

                      $this->session->set_flashdata('notify','  <script type="text/javascript">
        $(document).ready(function(){
          demo.initChartist();
            $.notify({
                icon: "ti-gift",
                message: "<b>Successfully</b>  logged in your account !"

            },{
                type: "success",
                timer: 4000
            });

        });
    </script>');

			redirect('admin');

                         	 }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password! </div>');
                          $this->session->set_flashdata('notify','  <script type="text/javascript">
        $(document).ready(function(){
          demo.initChartist();
            $.notify({
                icon: "ti-gift",
                message: "<b>Failed !</b> - log in failed."

            },{
                type: "danger",
                timer: 4000
            });

        });
    </script>');
                         redirect('account');
                         
                    }
               }
              
          }
     }



public function register()
    {
		//set validation rules
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[100] ');
		$this->form_validation->set_rules('uname', 'Full Name', 'trim|required|alpha|min_length[3]|max_length[100] ');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');

		$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|min_length[9]|max_length[14] ');
	
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|md5|min_length[4]|max_length[40]');
		//$this->form_validation->set_rules('type', 'Account Type', 'required|min_length[1]');
		

		//validate form input
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Validation Failed!!!</div>');
				$this->load->view('account/register');
			//$this->load->view('account/register');
        }
		else
		{
			//insert the user registration details into database
			$data = array(
				'fname' => $this->input->post('fname'),
				'uname' => $this->input->post('uname'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),			
				'pass' => $this->input->post('pass'),
				'type' => $this->input->post('type')
			);
			
			// insert form data into database
			if ($this->account_model->insertUser($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Login Now !!!</div>');
					$this->load->view('account/login');
				//echo "Successfully Created";
			
			}
			else
			{
				//echo "Failed";
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				$this->load->view('account/register');
			}
		}
	}
}
