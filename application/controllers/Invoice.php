
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice extends CI_Controller {


 function __construct() 
  {
    parent::__construct();

    if (!isset($_SESSION['admin_email'])) {
       redirect('account');
    }
   
  }
 

 
   public function index()
  {
    $data['current']='products ';
    $data['invoices'] = $this->invoice_model->get();
    $this->load->view('invoice/get',$data);
  }


public function  add()
  {
      $data['current']='products';
      $data['products'] = $this->products_model->get();
      $this->load->view('invoice/add',$data);
  }
 



  public function invoice_create()
  {

    // get the posted values

    $product = $this->input->post("txt_invoice_product");
    $qty = $this->input->post("txt_invoice_qty");
    $free = $this->input->post("txt_invoice_free");
    $price = $this->input->post("txt_invoice_price");
   


    $this->form_validation->set_rules("txt_invoice_qty", "invoice Quantity", "trim|required");

     $this->form_validation->set_rules("txt_invoice_free", "invoice Free", "trim|required");

      $this->form_validation->set_rules("txt_invoice_price", "Price", "trim|required");

 

    if ($this->form_validation->run() == FALSE)
    {

      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">
       '.validation_errors().'</div>');

     
      $data['products'] = $this->products_model->get();
   
      $this->load->view('invoice/add',$data);
    }
    else
    {

      // validation succeeds

      $amount=$qty*$price;
      $total_qty=$qty+$free;
      
      $data = array(
          'product_id' => $product,
          'quantity' => $qty,
          'free_item' => $free,
          'total_quantity' => $total_qty,
          'price' => $price,
          'amount' => $amount ,
         
        );

        // check if username and password is correct

        $result = $this->invoice_model->insert($data);
        if ($result) //active user record is present
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">invoice Present has added !</div>');
          redirect('invoice/');
        
      
        }
        else
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">insert Failed . Unknown Error ! </div>');
          $this->load->view('invoice/add');
 
        }
      
    }
  }


   public function delete($id)
  {
    if ($this->invoice_model->delete($id))
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">invoice Present has been Deleted !</div>');
      redirect('invoice');
    }
    else
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">invoice Present Deletion Failed!</div>');
      redirect('invoice');
    }

    // echo var_dump($data);

  }





 
  public function get_return()
  {
    $data['current']='products ';
    $data['invoices'] = $this->invoice_model->get_return();
    $this->load->view('invoice/get_return',$data);
  }


public function  add_return()
  {
      $data['current']='products';
      $data['products'] = $this->products_model->get();
      $this->load->view('invoice/add_return',$data);
  }
 



  public function invoice_return_create()
  {

    // get the posted values

    $product = $this->input->post("txt_invoice_product");
    $qty = $this->input->post("txt_invoice_qty");
    $free = $this->input->post("txt_invoice_free");
    $price = $this->input->post("txt_invoice_price");
    $rec= $this->input->post("txt_invoice_rec");
    $due = $this->input->post("txt_invoice_due");
   
   


    $this->form_validation->set_rules("txt_invoice_qty", "invoice Quantity", "trim|required");

     $this->form_validation->set_rules("txt_invoice_free", "invoice Free", "trim|required");

      $this->form_validation->set_rules("txt_invoice_price", "Price", "trim|required");

 

    if ($this->form_validation->run() == FALSE)
    {

      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">
       '.validation_errors().'</div>');

     
      $data['products'] = $this->products_model->get_return();
   
      $this->load->view('invoice/add',$data);
    }
    else
    {

      // validation succeeds

      $amount=$qty*$price;
      $total_qty=$qty+$free;
      
      $data = array(
          'product_id' => $product,
          'quantity' => $qty,
          'free_item' => $free,
          'total_quantity' => $total_qty,
          'price' => $price,
          'amount' => $amount ,
           'rec_amount' => $rec,
          'due_amount' => $due ,
         
        );

        // check if username and password is correct

        $result = $this->invoice_model->insert_return($data);
        if ($result) //active user record is present
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">invoice return has added !</div>');
          redirect('invoice/get_return');
        
      
        }
        else
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">insert Failed . Unknown Error ! </div>');
          $this->load->view('invoice/add_return');
 
        }
      
    }
  }


   public function delete_return($id)
  {
    if ($this->invoice_model->delete_return($id))
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invoice Return has been Deleted !</div>');
      redirect('invoice/get_return');
    }
    else
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invoice Return Deletion Failed!</div>');
      redirect('invoice/get_return');
    }

    // echo var_dump($data);

  }








 
}

