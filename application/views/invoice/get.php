
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data['isactive']=$current;
$this->load->view("module/header",$data);
?>



      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Invoices  <a class="btn btn-primary" href="<?php echo base_url().'index.php/invoice/add' ?>" style="float: right"> Add New product invoice </a> </h4>
                               
                              
                            </div>
                            <div class="content table-responsive table-full-width">





                                <table class="table table-hover">
                                    <thead>
                                        <tr><th>SL</th>
                                      <th>Product Name</th>
                                      <th>Product Code</th>
                                      <th>P. Quanty</th>
                                       <th>Free Item</th>
                                      <th>Total Quantity</th>
                                      <th>Price</th>
                                      <th>Amount</th>
                               
                                      
                                    
                                      <th></th>
                                    </tr></thead>
                                    <tbody>

<?php

$i=1;
            foreach ($invoices as $item)
            {
                  $url=base_url();
                  $id=$item->sid; 
                  $name=$item->name; 
                


                                       echo "<tr>";
                                       echo "<td>".$i."</td>"; 
                                      
                                       echo "<td>".$name."</td>";   
                                       echo "<td>".$item->code."</td>";
                                       echo "<td>".$item->quantity."</td>";
                                       echo "<td>".$item->free_item."</td>";
                                       echo "<td>".$item->total_quantity."</td>";
                                       echo "<td>৳ ".$item->price."</td>";
                                       echo "<td>৳ ".$item->amount."</td>";
                                  
                                         

                                  
                                         echo  "<td>
                                         
                                      <a href='".$url."index.php/invoice/delete/".$id."'>Delete  </a>
                                      
                                      </td>";
                                       echo    "</tr>";
                                       $i++; 

            }
                                        ?>

                                        <tr> <?php echo $this->session->flashdata('msg'); ?>  </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                 


                </div>
            </div>
        </div>



 


<?php

$this->load->view("module/footer");
?>
