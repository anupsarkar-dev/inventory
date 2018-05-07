<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
$data['isactive']=$current;
$this->load->view("module/header",$data);
   ?>
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 mr-auto">
            <?php $attributes = array("class" => "", "id" => "dsrform", "name" => "dsrform");
               echo form_open("admin/dsr_create", $attributes);?>
            <div class="card card-plain" style="
               border:  1px solid;
               padding-bottom: 40px;
               margin-left: 200px;
               margin-right: 200px;
               background: #f5f5f599;
               border-radius: 10px;
               ">
               <div class="content">
                  <h2 class="card-title">Add DSR</h2>
                  <h4 class="card-subtitle">Provide DSR Info</h4>
                  <hr />
                   <?php echo $this->session->flashdata('msg'); ?>
                  
                  <div class="form-group">
                     <input type="text" placeholder="dsr Name" id="txt_dsr_name" name="txt_dsr_name" class="form-control" value="<?php echo set_value('txt_dsr_name'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_dsr_name'); ?></span>
                  </div>

                   <div class="form-group">
                     <input type="text" placeholder="DSR ID" id="txt_dsr_id" name="txt_dsr_id" class="form-control" value="<?php echo set_value('txt_dsr_id'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_dsr_id'); ?></span>
                  </div>

                  
                 
                  
               <div class="footer text-center">
                  <input type="submit" class="btn btn-fill btn-neutral btn-wd" id="btn_dsr" name="btn_dsr" value="Add dsr" />
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