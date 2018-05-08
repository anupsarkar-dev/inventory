<?php

/**
 * @property  email
 */
class stocks_model extends CI_Model
{
	function __construct()
    {

        parent::__construct();
    }
	

	//send verification email to user's email id
	

	function insert_stock_received($data2)
    {
		if($this->db->insert('present_stock', $data2))
        {
           return  $sp_id = $this->db->insert_id();
        
        }
        else
        {
            return 0;
        }
	}

    function insert_stock_received2($data)
    {

            return $this->db->insert('stock_received', $data);

    }
		
   

 

    public function get_stock_received()
    {
        
         $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record
         $this->db->select('*');
         $this->db->select('products.name as name,products.code as codes,stock_received.id as sid,products.price as price');
         $this->db->from('stock_received'); /*I assume that film was the table name*/
        /*I assume that film was the table name*/
         $this->db->join('products', 'products.id = stock_received.product_id');

         $sql= $this->db->get();

        
         $result=$sql->result();

        return $result;
    }


    public function get_product_price($id)
     {
     $this->db->select('*');
    $this->db->from('products');
    $this->db->where('id',$id);
    return $this->db->get()->row();
    }
     

 


public function delete_stock_received($id)
{
    $this->db->where('id', $id);
    $this->db->delete('stock_received');
    if($this->db->affected_rows() > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}




    function insert_stock_returned($data)
    {
     return $this->db->insert('stock_return', $data);
    }

  

public function getpid($pid)
     {
     $this->db->select('*');
      $this->db->from('stock_received');
    $this->db->where('product_id',$pid);
    return $this->db->get()->row();
    }
 
  public function get_present_stock($id)
     {
     $this->db->select('*');
    $this->db->from('present_stock');
    $this->db->where('id',$id);
    return $this->db->get()->row();
    }


   public function update_ps($data,$id)
    {
   
       
        $this->db->where('id', $id);
       
        $this->db->update('present_stock',$data);
        return true;
    }


    public function get_stock_return()
    {
        
         $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record
         $this->db->select('*');
         $this->db->select('products.name as name,products.code as code,stock_return.id as sid,products.price as price');
         $this->db->from('stock_return'); /*I assume that film was the table name*/
        /*I assume that film was the table name*/
         $this->db->join('products', 'products.id = stock_return.product_id');

         $sql= $this->db->get();

        
         $result=$sql->result();

        return $result;
    }

     

 


public function delete_stock_return($id)
{
    $this->db->where('id', $id);
    $this->db->delete('stock_return');
    if($this->db->affected_rows() > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}



    function insert_stock_present($data)
    {
        return $this->db->insert('present_stock', $data);
    }

        
   

 

    public function get_stock_present()
    {
        
         $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record
         $this->db->select('*');
         $this->db->select('products.name as name,products.code as code,present_stock.id as sid,products.price as price');
         $this->db->from('present_stock'); /*I assume that film was the table name*/
        /*I assume that film was the table name*/
         $this->db->join('products', 'products.id = present_stock.product_id');

         $sql= $this->db->get();

        
         $result=$sql->result();

        return $result;
    }

     

 


public function delete_stock_present($id)
{
    $this->db->where('id', $id);
    $this->db->delete('present_stock');
    if($this->db->affected_rows() > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}




    function insert_dsr($data)
    {
        return $this->db->insert('dsr', $data);
    }

        
   

 
 public function get_dsr()
    {
        
         $this->db->select('*');
              $this->db->from('dsr'); /*I assume that film was the table name*/
            
        

            $sql= $this->db->get();

        
        $result=$sql->result();

        return $result;
    }

 


public function delete_dsr($id)
{
    $this->db->where('id', $id);
    $this->db->delete('dsr');
    if($this->db->affected_rows() > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}





 


 


  

}