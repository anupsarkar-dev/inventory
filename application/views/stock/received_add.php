<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
$data['isactive']="stock_recieved";
$this->load->view("module/header",$data);
   ?>
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 mr-auto">
            <?php $attributes = array("class" => "", "id" => "stockform", "name" => "stockform");
               echo form_open("stock/stock_create", $attributes);?>
            <div class="card card-plain" style="
               border:  1px solid;
               padding-bottom: 40px;
               margin-left: 200px;
               margin-right: 200px;
               background: #f5f5f599;
               border-radius: 10px;
               ">
               <div class="content">
                  <h2 class="card-title">Add stock</h2>
                  <h4 class="card-subtitle">Provide stock Info</h4>
                  <hr />
                   <?php echo $this->session->flashdata('msg'); ?>
                  
                    <div class="form-group">
                   <label style="text-align: center;"><span>Product</span></label>
                     <select  id="txt_stock_product" name="txt_stock_product" class="form-control" >
                    
                     <?php 
                        foreach($products as $item )
                        {
                           echo "<option value='".$item->id."' >".$item->name.' ( '.$item->type." )</option>";
                        }
                        ?>
                     </select>
                 
                  </div>

                  <div class="form-group">
                     <input type="number" placeholder="Product Quantity" id="txt_stock_qty" name="txt_stock_qty" class="form-control" value="<?php echo set_value('txt_stock_qty'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_stock_qty'); ?></span>
                  </div>

                    <div class="form-group">
                     <input type="number" placeholder="Free Item" id="txt_stock_free" name="txt_stock_free" class="form-control" value="<?php echo set_value('txt_stock_free'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_stock_free'); ?></span>
                  </div>

                 

                  <div class="form-group">
                    <label style="text-align: center;"><span>Date</span></label>
                     <input type="date"   id="txt_stock_date" name="txt_stock_date"   class="form-control" value="<?php echo date('Y-m-d'); ?>">
                    
                  </div>

                   

                  
               <div class="footer text-center">
                <br/>
                  <input type="submit" class="btn btn-fill btn-neutral btn-wd" id="btn_stock" name="btn_stock" value="Add Stock Received" />
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