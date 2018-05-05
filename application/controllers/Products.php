
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller {


 function __construct() 
  {
    parent::__construct();

    if (!isset($_SESSION['admin_email'])) {
       redirect('account');
    }
   
  }
  
  public function index()
  {
    $data['current']='products';
    $data['products'] = $this->products_model->get();
    $this->load->view('products/get',$data);
  }

    public function categories()
  {
    $data['current']='products';
    $data['categories'] = $this->products_model->getCategories();
    $this->load->view('products/getCategories',$data);
  }


public function add()
  {
      $data['current']='products';
      $data['categories'] = $this->products_model->getCategories();
      $this->load->view('products/add',$data);
  }
 

  public function category_add()
  {
      $data['current']='products';

      $this->load->view('products/addcategory',$data);
  }




 public function product_delete($id)
  {
    if ($this->products_model->deleteProduct($id))
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Product has been Deleted !</div>');
      redirect('products/');
    }
    else
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Product Deletion Failed!</div>');
      redirect('products/');
    }

    // echo var_dump($data);

  }

 public function category_delete($id)
  {
    if ($this->products_model->deleteCategory($id))
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Category has been Deleted !</div>');
      redirect('products/categories');
    }
    else
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Category Deletion Failed!</div>');
      redirect('products/categories');
    }

    // echo var_dump($data);

  }

  

  public function details($id)
  {
    $data['current']='products';
    $data['provider'] = $this->products_model->getById($id);
    $this->load->view('products/details', $data);

    // echo var_dump($data);

  }






  public function category_create()
  {

    // get the posted values


    $this->form_validation->set_rules("txt_category_name", "Category name", "trim|required|min_length[3]|max_length[300]");

     $this->form_validation->set_rules("txt_category_details", "Category Designation", "trim|required|min_length[3]|max_length[100]");

     $this->form_validation->set_rules("txt_category_type", "Category Address", "trim|min_length[3]|max_length[200]");


    $name = $this->input->post("txt_category_name");
    $details = $this->input->post("txt_category_details");
    $type = $this->input->post("txt_category_type");
   

    if ($this->form_validation->run() == FALSE)
    {

      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">
       '.validation_errors().'</div>');

     

   
      $this->load->view('products/addcategory ');
    }
    else
    {

      // validation succeeds

      
        $data = array(
          'category_name' => $name,
          'details' => $details,
           'type' => $type,
       
        );

        // check if username and password is correct

        $result = $this->products_model->insert($data);
        if (result) //active user record is present
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">A New products has added !</div>');
          redirect('products/categories');
        }
        else
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">insert Failed . Unknown Error ! </div>');
          $this->load->view('products/addcategory');
        }
      
    }
  }


 
  public function product_create()
  {

    // get the posted values

    $name = $this->input->post("txt_product_name");
    $desc = $this->input->post("txt_product_desc");
    $price = $this->input->post("txt_product_price");
    $mob = $this->input->post("txt_product_code");
    $category = $this->input->post("txt_product_cat");


    $this->form_validation->set_rules("txt_product_name", "Products name", "trim|required|min_length[3]|max_length[300]");

     $this->form_validation->set_rules("txt_product_desc", "Products Details", "trim|min_length[3]|max_length[500]");

     $this->form_validation->set_rules("txt_product_price", "Provider Address", "required");

    $this->form_validation->set_rules('txt_product_code', 'Products Code', 'trim|min_length[1]|max_length[100]');




    if ($this->form_validation->run() == FALSE)
    {

      // validation fails
   
      $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">validation error</div>');

      $this->load->view('products/add/');
    }
    else
    {

      // validation succeeds

      
        $data = array(
         'name' => $name,
          'description' => $desc,
           'price' => $price,
            'code' => $mob,
             'category_id' => $category
          

        );

        // check if username and password is correct

        $result = $this->products_model->insert_products($data);
        if (result) //active user record is present
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"> products has been updated !</div>');
          redirect('products/');
        }
        else
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">update Failed . Unknown Error ! </div>');
          $this->load->view('products/add/');
          
        }
      
    }
  }





public function hash_password($password){
   return password_hash($password, PASSWORD_BCRYPT);
}

}

