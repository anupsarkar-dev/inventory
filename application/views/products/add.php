<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
$data['isactive']=$current;
$this->load->view("module/header",$data);
   ?>
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 mr-auto">
            <?php $attributes = array("class" => "", "id" => "productform", "name" => "productform");
               echo form_open("products/product_create", $attributes);?>
            <div class="card card-plain" style="
               border:  1px solid;
               padding-bottom: 40px;
               margin-left: 200px;
               margin-right: 200px;
               background: #f5f5f599;
               border-radius: 10px;
               ">
               <div class="content">
                  <h2 class="card-title">Add product</h2>
                  <h4 class="card-subtitle">Provide product Info</h4>
                  <hr />
                   <?php echo $this->session->flashdata('msg'); ?>
                  
                  <div class="form-group">
                     <input type="text" placeholder="product Name" id="txt_product_name" name="txt_product_name" class="form-control" value="<?php echo set_value('txt_product_name'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_product_name'); ?></span>
                  </div>

                   <div class="form-group">
                     <input type="text" placeholder="product Details" id="txt_product_desc" name="txt_product_desc" class="form-control" value="<?php echo set_value('txt_product_desc'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_product_desc'); ?></span>
                  </div>

                   <div class="form-group">
                     <input type="number" placeholder="Product Price(৳)" id="txt_product_price" name="txt_product_price" class="form-control" value="<?php echo set_value('txt_product_price'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_product_price'); ?></span>
                  </div>

                   <div class="form-group">
                     <input type="text" placeholder="product code" id="txt_product_code" name="txt_product_code" class="form-control" value="<?php echo set_value('txt_product_code'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_product_code'); ?></span>
                  </div>

                   <div class="form-group">
                   <label style="text-align: center;"><span>Category</span></label>
                     <select  id="txt_product_cat" name="txt_product_cat" class="form-control" >
                    
                     <?php 
                        foreach($categories as $item )
                        {
                           echo "<option value='".$item->id."' >".$item->category_name."</option>";
                        }
                        ?>
                     </select>
                 
                  
               <div class="footer text-center">
                  <input type="submit" class="btn btn-fill btn-neutral btn-wd" id="btn_product" name="btn_product" value="Add Product" />
               </div>
            </div>
            <?php echo form_close(); ?>
           
         </div>
      </div>
   </div>
</div>
</div>
<?php echo $this->session->flashdata('notify'); ?>
<?php
   $this->load->view("module/footer");
   ?>