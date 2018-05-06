<?php

/**
 * @property  email
 */
class products_model extends CI_Model
{
	function __construct()
    {

        parent::__construct();
    }
	

	//send verification email to user's email id
	

	function insert($data)
    {
		return $this->db->insert('category', $data);
	}

		
  

   function insert_products($data)
    {
    return $this->db->insert('products', $data);
  }



    public function getCategories()
    {
        
         $this->db->select('*');
		      $this->db->from('category'); /*I assume that film was the table name*/
		    
		

		    $sql= $this->db->get();

        
        $result=$sql->result();

        return $result;
    }


    public function get()
    {
        
         $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record
         $this->db->select('*');
         $this->db->select('category.category_name as category,products.id as id');
         $this->db->from('products'); /*I assume that film was the table name*/
        
    
 /*I assume that film was the table name*/
        $this->db->join('category', 'category.id = products.category_id');

        $sql= $this->db->get();

        
        $result=$sql->result();

        return $result;
    }

     public function getById($id)
    {
        $this->load->database();

        $query = $this->db->get_where('category', array('id' => $id));
        return $query->result();
    }

    public function getProviderId($email)
    {
      $this->db->select('id');
      $this->db->from('category');
      $this->db->where('email',$email);
      $reault_array = $this->db->get()->result_array();
      return $reault_array[0]['id'];
    }




     public function update($data,$id)
    {
        $this->load->database();
       
        $this->db->where('id', $id);
       
        $this->db->update('category',$data);
        return true;
    }


public function deleteCategory($id)
{
    $this->db->where('id', $id);
    $this->db->delete('category');
    if($this->db->affected_rows() > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}


public function deleteProduct($id)
{
    $this->db->where('id', $id);
    $this->db->delete('products');
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