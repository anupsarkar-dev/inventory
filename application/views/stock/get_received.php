
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
                                <h4 class="title">All Stock Received <a class="btn btn-primary" href="<?php echo base_url().'index.php/stock/received_add' ?>" style="float: right"> Add New product </a> </h4>
                               
                              
                            </div>
                            <div class="content table-responsive table-full-width">





                                <table class="table table-hover">
                                    <thead>
                                        <tr><th>SL</th>
                                      <th>Product Name</th>
                       
                                      <th>P. Quantity</th>
                                       <th>Free Item</th>
                                      <th>Total Quantity</th>
                                      <th>Unit Price</th>
                                      <th>Amount</th>
                                      <th>Avarage</th>
                                      
                                    
                                      <th></th>
                                    </tr></thead>
                                    <tbody>

<?php

$i=1;
            foreach ($stocks as $item)
            {
                  $url=base_url();
                  $id=$item->sid; 
                  $name=$item->name; 
                


                                       echo "<tr>";
                                       echo "<td>".$i."</td>"; 
                                      
                                       echo "<td>".$name."</td>";   
                             
                                       echo "<td>".$item->quantity."</td>";
                                       echo "<td>".$item->free_item."</td>";
                                       echo "<td>".$item->total_quantity."</td>";
                                       echo "<td>৳ ".$item->price."</td>";
                                       echo "<td>৳ ".$item->amount."</td>";
                                       echo "<td>৳ ".ceil($item->avarage)."</td>";
                                         

                                  
                                         echo  "<td>
                                         
                                      <a href='".$url."index.php/stock/delete_stock_received/".$id."'>Delete  </a>
                                      
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
