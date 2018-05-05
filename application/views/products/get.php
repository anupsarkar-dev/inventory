
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
                                <h4 class="title">All Products <a class="btn btn-primary" href="<?php echo base_url().'index.php/products/add' ?>" style="float: right"> Add New product </a> </h4>
                               
                              
                            </div>
                            <div class="content table-responsive table-full-width">





                                <table class="table table-hover">
                                    <thead>
                                        <tr><th>SL</th>
                                      <th>Name</th>
                                      <th>Details</th>
                                      <th>Price</th>
                                       <th>Code</th>
                                      <th>Category</th>
                                      
                                    
                                      <th></th>
                                    </tr></thead>
                                    <tbody>

<?php

$i=1;
            foreach ($products as $item)
            {
                  $url=base_url();
                  $id=$item->id; 
                  $name=$item-> name; 
                


                                       echo "<tr>";
                                       echo "<td>".$i."</td>"; 
                                      
                                       echo "<td>".$name."</td>";   
                                       echo "<td>".$item->description."</td>";
                                       echo "<td>".$item->price."</td>";
                                       echo "<td>".$item->code."</td>";
                                       echo "<td>".$item->category."</td>";
                                         

                                  
                                         echo  "<td>
                                         
                                      <a href='".$url."index.php/products/product_delete/".$id."'>Delete  </a>
                                      
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
