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
	

	function insert_stock_received($data)
    {
		return $this->db->insert('stock_received', $data);
	}

		
   

 

    public function get_stock_received()
    {
        
         $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record
         $this->db->select('*');
         $this->db->select('products.name as name,products.code as code,stock_received.id as sid,stock_received.price as price');
         $this->db->from('stock_received'); /*I assume that film was the table name*/
        /*I assume that film was the table name*/
         $this->db->join('products', 'products.id = stock_received.product_id');

         $sql= $this->db->get();

        
         $result=$sql->result();

        return $result;
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

        
   

 

    public function get_stock_return()
    {
        
         $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record
         $this->db->select('*');
         $this->db->select('products.name as name,products.code as code,stock_return.id as sid,stock_return.price as price');
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
         $this->db->select('products.name as name,products.code as code,present_stock.id as sid,present_stock.price as price');
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





 


  

}