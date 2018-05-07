<?php

/**
 * @property  email
 */
class invoice_model extends CI_Model
{
	function __construct()
    {

        parent::__construct();
    }
	

	//send verification email to user's email id
	

	function insert($data)
    {
        return $this->db->insert('challan', $data);
    }

        
   

 

    public function get()
    {
        
         $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record
         $this->db->select('*');
         $this->db->select('products.name as name,products.code as code,challan.id as sid,challan.price as price,dsr.dsr_name as dsr_name');
         $this->db->from('challan'); /*I assume that film was the table name*/
        /*I assume that film was the table name*/
         $this->db->join('products', 'products.id = challan.product_id');
         $this->db->join('dsr', 'dsr.id = challan.dsr_id');

         $sql= $this->db->get();

        
         $result=$sql->result();

        return $result;
    }

     

 


public function delete($id)
{
    $this->db->where('id', $id);
    $this->db->delete('challan');
    if($this->db->affected_rows() > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}



function insert_return($data)
    {
        return $this->db->insert('challan_return', $data);
    }

        
   

 

    public function get_return()
    {
        
         $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record
         $this->db->select('*');
         $this->db->select('products.name as name,products.code as code,challan_return.id as sid,dsr.dsr_name as dsr_name');
         $this->db->from('challan_return'); /*I assume that film was the table name*/
        /*I assume that film was the table name*/
         $this->db->join('products', 'products.id = challan_return.product_id');
          $this->db->join('dsr', 'dsr.id = challan_return.dsr_id');

         $sql= $this->db->get();

        
         $result=$sql->result();

        return $result;
    }

     

 


public function delete_return($id)
{
    $this->db->where('id', $id);
    $this->db->delete('challan_return');
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