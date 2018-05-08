<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stock extends CI_Controller {


 function __construct() 
  {
    parent::__construct();

    if (!isset($_SESSION['admin_email'])) {
       redirect('account');
    }
   
  }
 

   public function received()
  {
    $data['current']='products ';
    $data['stocks'] = $this->stocks_model->get_stock_received();
    $this->load->view('stock/get_received',$data);
  }


public function received_add()
  {
      $data['current']='products';
      $data['products'] = $this->products_model->get();
      $this->load->view('stock/received_add',$data);
  }
 



  public function stock_create()
  {

    // get the posted values

    $product_id = $this->input->post("txt_stock_product");
    $qty = $this->input->post("txt_stock_qty");
    $free = $this->input->post("txt_stock_free");
   
    $date = $this->input->post("txt_stock_date");
   


    $this->form_validation->set_rules("txt_stock_qty", "Stock Quantity", "trim|required");

    $this->form_validation->set_rules("txt_stock_free", "Stock Free", "trim|required");

    

 

    if ($this->form_validation->run() == FALSE)
    {

      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">
       '.validation_errors().'</div>');

     
      $data['products'] = $this->products_model->get();
   
      $this->load->view('stock/received_add',$data);
    }
    else
    {

      // validation succeeds
      $price=$this->stocks_model->get_product_price($product_id);

      
      $amount=$qty*$price->price;
      $total_qty=$qty+$free;

     
     

      $data2 = array(
          'product_id' => $product_id,
          'quantity' => $qty,
           'free_item' => $free,
          'total_quantity' => $total_qty,

           'amount' => $amount ,
           
           'date' => $date,
        );

$sr_id=$this->stocks_model->insert_stock_received($data2);
       $data = array(
          'product_id' => $product_id,
          'quantity' => $qty,
           'free_item' => $free,
          'total_quantity' => $total_qty,
         'stock_present_id' => $sr_id,
           'amount' => $amount ,
           'avarage' => $amount/$total_qty,
           'date' => $date,
        );

        // check if username and password is correct

        $result = $this->stocks_model->insert_stock_received2($data);
        if ($result != 0) //active user record is present
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">A New products has added !</div>');
          redirect('stock/received');
      
        }
        else
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">insert Failed . Unknown Error ! </div>');
          $this->load->view('stock/received_add');
 
        }
      
    }
  }


   public function delete_stock_received($id)
  {
    if ($this->stocks_model->delete_stock_received($id))
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Stock Received has been Deleted !</div>');
      redirect('stock/received');
    }
    else
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Stock Recevied Deletion Failed!</div>');
      redirect('stock/received');
    }

    // echo var_dump($data);

  }




   public function returned()
  {
    $data['current']='products ';
    $data['stocks'] = $this->stocks_model->get_stock_return();
    $this->load->view('stock/get_returned',$data);
  }


public function returned_add()
  {
      $data['current']='products';
      $data['products'] = $this->products_model->get();
      $this->load->view('stock/returned_add',$data);
  }
 



  public function stock_returned_create()
  {

    // get the posted values

    $product = $this->input->post("txt_stock_product");
    $qty = $this->input->post("txt_stock_qty");
    $free = $this->input->post("txt_stock_free");
 
   


    $this->form_validation->set_rules("txt_stock_qty", "Stock Quantity", "trim|required");

     $this->form_validation->set_rules("txt_stock_free", "Stock Free", "trim|required");

  

 
    $pro=$this->stocks_model->get_product_price($product);
   
    $price=$pro->price;

    if ($this->form_validation->run() == FALSE)
    {

      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">
       '.validation_errors().'</div>');

     
      $data['products'] = $this->products_model->get();
   
      $this->load->view('stock/returned_add',$data);
    }
    else
    {

      // validation succeeds

      $amount=$qty * ($pro->price);
      $total_qty=$qty+$free;

      $present_stock=$this->stocks_model->getpid($product);

     

      if($present_stock != null)
      {
        $pstock=$this->stocks_model->get_present_stock($present_stock->stock_present_id);

         $data2 = array(

          'quantity' => $pstock->quantity + $qty,
          'free_item' => $pstock->free_item+ $free,
          'total_quantity' => $pstock->total_quantity+$total_qty,
          'price' => ($pstock->price) +$price,
          'amount' => $pstock->amount + $amount ,
         
        );

         $status=$this->stocks_model->update_ps($data2,$present_stock->stock_present_id);

      }
      
      $data = array(
          'stock_present_id' =>$present_stock->stock_present_id,
          'product_id' => $product,
          'quantity' => $qty,
          'free_item' => $free,
          'total_quantity' => $total_qty,
          'price' => $price,
          'amount' => $amount ,
         
        );



        // check if username and password is correct

        $result = $this->stocks_model->insert_stock_returned($data);
        if ($result) //active user record is present
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">A New products has added !</div>');
          //redirect('stock/returned');
          if($status)
          {
            redirect('stock/returned');
          }
          else
          {
            echo "false";
          }
        
      
        }
        else
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">insert Failed . Unknown Error ! </div>');
          $this->load->view('stock/returned_add');
 
        }
      
    }
  }


   public function delete_stock_returned($id)
  {
    if ($this->stocks_model->delete_stock_return($id))
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Stock Received has been Deleted !</div>');
      redirect('stock/returned');
    }
    else
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Stock Recevied Deletion Failed!</div>');
      redirect('stock/returned');
    }

    // echo var_dump($data);

  }











   public function present()
  {
    $data['current']='products ';
    $data['stocks'] = $this->stocks_model->get_stock_present();
    $this->load->view('stock/get_present',$data);
  }


public function present_add()
  {
      $data['current']='products';
      $data['products'] = $this->products_model->get();
      $this->load->view('stock/present_add',$data);
  }
 



  public function stock_present_create()
  {

    // get the posted values

    $product = $this->input->post("txt_stock_product");
    $qty = $this->input->post("txt_stock_qty");
    $free = $this->input->post("txt_stock_free");
    $price = $this->input->post("txt_stock_price");
   


    $this->form_validation->set_rules("txt_stock_qty", "Stock Quantity", "trim|required");

     $this->form_validation->set_rules("txt_stock_free", "Stock Free", "trim|required");

      $this->form_validation->set_rules("txt_stock_price", "Price", "trim|required");

 

    if ($this->form_validation->run() == FALSE)
    {

      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">
       '.validation_errors().'</div>');

     
      $data['products'] = $this->products_model->get();
   
      $this->load->view('stock/resent_add',$data);
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

        $result = $this->stocks_model->insert_stock_present($data);
        if ($result) //active user record is present
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Stock Present has added !</div>');
          redirect('stock/present');
        
      
        }
        else
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">insert Failed . Unknown Error ! </div>');
          $this->load->view('stock/present_add');
 
        }
      
    }
  }


   public function delete_stock_present($id)
  {
    if ($this->stocks_model->delete_stock_present($id))
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Stock Present has been Deleted !</div>');
      redirect('stock/present');
    }
    else
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Stock Present Deletion Failed!</div>');
      redirect('stock/present');
    }

    // echo var_dump($data);

  }
 
}

