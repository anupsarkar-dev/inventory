
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
                                <h4 class="title">All DSR <a class="btn btn-primary" href="<?php echo base_url().'index.php/admin/dsr_add' ?>" style="float: right"> Add New dsr </a> </h4>
                               
                              
                            </div>
                            <div class="content table-responsive table-full-width">





                                <table class="table table-hover">
                                    <thead>
                                        <tr><th>SL</th>
                                      <th>Name</th>
                                      <th>DSR ID</th>
                                  
                                    
                                      <th></th>
                                    </tr></thead>
                                    <tbody>

<?php

$i=1;
            foreach ($dsr as $item)
            {
                  $url=base_url();
                  $id=$item->id; 
                  $name=$item->dsr_name; 
                


                                       echo "<tr>";
                                       echo "<td>".$i."</td>"; 
                                      
                                       echo "<td>".$name."</td>";   
                                        echo "<td>".$item->dsr_id."</td>";
                              
                                         

                                  
                                         echo  "<td>
                                         
                                      <a href='".$url."index.php/products/dsr_delete/".$id."'>Delete  </a>
                                      
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
