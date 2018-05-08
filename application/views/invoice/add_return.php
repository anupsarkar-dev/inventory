<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
$data['isactive']="invoice_recieved";
$this->load->view("module/header",$data);
   ?>

 <script type="text/javascript">

 </script>
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 mr-auto">
            <?php $attributes = array("class" => "", "id" => "invoiceform", "name" => "invoiceform");
               echo form_open("invoice/invoice_return_create", $attributes);?>
            <div class="card card-plain" style="
               border:  1px solid;
               padding-bottom: 40px;
               margin-left: 200px;
               margin-right: 200px;
               background: #f5f5f599;
               border-radius: 10px;
               ">
               <div class="content">
                  <h2 class="card-title">Add Invoice Retrun</h2>
                  <h4 class="card-subtitle">Provide invoice Info</h4>
                  <hr />
                   <?php echo $this->session->flashdata('msg'); ?>
                  
                   <div class="form-group">
                    <label style="text-align: center;"><span>Date</span></label>
                     <input type="date"   id="txt_invoice_date" name="txt_invoice_date"   class="form-control" value="<?php echo date('Y-m-d'); ?>">
                    
                  </div>

                   <div class="form-group">
                   <label style="text-align: center;"><span>DSR </span></label>
                     <select  id="txt_invoice_dsr" name="txt_invoice_dsr" class="form-control" >
                    
                     <?php 
                        foreach($dsr as $item )
                        {
                           echo "<option value='".$item->id."' >".$item->dsr_name."</option>";
                        }
                        ?>
                     </select>
                 
                  </div>


                    <div class="form-group">
                   <label style="text-align: center;"><span>Product</span></label>
                     <select  id="txt_invoice_product" name="txt_invoice_product" class="form-control" >
                    
                     <?php 
                        foreach($products as $item )
                        {
                           echo "<option value='".$item->id."' >".$item->name.' ( '.$item->type." )</option>";
                        }
                        ?>
                     </select>
                 
                  </div>

                  <div class="form-group">
                     <input type="number" placeholder="Product Quantity" id="txt_invoice_qty" name="txt_invoice_qty" class="form-control" value="<?php echo set_value('txt_invoice_qty'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_invoice_qty'); ?></span>
                  </div>

                    <div class="form-group">
                     <input type="number" placeholder="Free Item" id="txt_invoice_free" name="txt_invoice_free" class="form-control" value="<?php echo set_value('txt_invoice_free'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_invoice_free'); ?></span>
                  </div>
 

                   <div class="form-group">
                     <input type="number" placeholder=" Rec. Amount(৳)" id="txt_invoice_rec" name="txt_invoice_rec" class="form-control" value="<?php echo set_value('txt_invoice_rec'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_invoice_rec'); ?></span>
                  </div>

                   <div class="form-group">
                     <input type="number" placeholder=" Due Amount(৳)" id="txt_invoice_due" name="txt_invoice_due" class="form-control" value="<?php echo set_value('txt_invoice_due'); ?>">
                     <span class="text-danger"><?php echo form_error('txt_invoice_due'); ?></span>
                  </div>

                   

                  
               <div class="footer text-center">
                <br/>
                  <input type="submit" class="btn btn-fill btn-neutral btn-wd" id="btn_invoice" name="btn_invoice" value="Add Invoice Return " />
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