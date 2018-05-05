<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
$data['isactive']=$current;
$this->load->view("module/header",$data);
   ?>
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 mr-auto">
            <?php $attributes = array("class" => "", "id" => "categoryform", "name" => "categoryform");
               echo form_open("products/category_create", $attributes);?>
            <div class="card card-plain" style="
               border:  1px solid;
               padding-bottom: 40px;
               margin-left: 200px;
               margin-right: 200px;
               background: #f5f5f599;
               border-radius: 10px;
               ">
               <div class="content">
                  <h2 class="card-title">Add category</h2>
                  <h4 class="card-subtitle">Provide category Info</h4>
                  <hr />
                   <?php echo $this->session->flashdata('msg'); ?>
                  
                  <div class="form-group">
                     <input type="text" placeholder="category Name" id="txt_category_name" name="txt_category_name" class="form-control" value="<?php echo set_value('txt_category_name'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_category_name'); ?></span>
                  </div>

                   <div class="form-group">
                     <input type="text" placeholder="category Details" id="txt_category_details" name="txt_category_details" class="form-control" value="<?php echo set_value('txt_category_desig'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_category_desig'); ?></span>
                  </div>

                   <div class="form-group">
                     <input type="text" placeholder="category type" id="txt_category_type" name="txt_category_type" class="form-control" value="<?php echo set_value('txt_category_type'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_category_type'); ?></span>
                  </div>
                 
                  
               <div class="footer text-center">
                  <input type="submit" class="btn btn-fill btn-neutral btn-wd" id="btn_category" name="btn_category" value="Add Category" />
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