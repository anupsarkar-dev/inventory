
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Inventory</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

</head>

<style type="text/css">
    @media (max-width: 991px)
    {
#sideBar
{
    display: none;
}
#footerColor
{
    color: orange;
}
}
</style>
<body>

 <div class="wrapper wrapper-full-page" 
 style="background-image: url('<?php echo base_url(); ?>assets/img/bg6.jpg');

 background-size: cover;
">
        <!-- Navbar -->
       
        <!-- End Navbar -->
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="full-page register-page section-image" data-color="orange" data-image="../../assets/img/bg5.jpg">
            <div class="content">
                <div class="container">
                    <div class="card card-register card-plain text-center">
                        <div class="card-header ">
                            <div class="row  justify-content-center">
                                <div class="col-md-8">
                                    <div class="header-text">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body " >
                            <div class="row">
                                <div class="col-md-4 ml-auto" id="sideBar" style="visibility: hidden;">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="nc-icon nc-circle-09"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Free Account</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="media" id="sideBar">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="nc-icon nc-preferences-circle-rotate"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Cheapest Rate</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="nc-icon nc-planet"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>100% Secure</h4>
                                            <p>.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-auto">
                                   
                                         <?php $attributes = array("class" => "", "id" => "loginform", "name" => "loginform");
                                                      echo form_open("Account/validate", $attributes);?>
                                        <div class="card card-plain" style="
    border:  1px solid;
    padding-bottom: 40px;
    margin-top: 100px;
    background: #337ab7ad;
    border-radius: 10px;
">
                                            <div class="content">
                                                 <h2 class="card-title" style="color: white"> <b>Inventory Login ! </b></h2>
                                        <h4 class="card-subtitle" style="color: lightgrey;text-transform: uppercase;" >Provide Your Credintials</h4>
                                        <hr />
                                            
                                            <div class="form-group">
                                                    <input type="email" placeholder="Email" id="txt_email" name="txt_email" class="form-control" value="<?php echo set_value('txt_email'); ?>">

                                                      <span class="text-danger"><?php echo form_error('txt_email'); ?></span>
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" placeholder="Enter password" id="txt_password" name="txt_password"  class="form-control" value="<?php echo set_value('txt_password'); ?>">

                                                      <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                                                </div>


                                               
                                               
                                            </div>
                                            <div class="footer text-center">
                                                <input type="submit" class="btn btn-fill btn-neutral btn-wd" id="btn_login" name="btn_login" value="Login" />

                                             
                                            </div>
                                        </div>
                                      <?php echo form_close(); ?>
                                    <?php echo $this->session->flashdata('msg'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href=""  style="color: white">
                                Inventory
                            </a>
                        </li>
                        <li>
                            <a href="" style="color: white">
                               About 
                            </a>
                        </li>
                        <li>
                            <a href="" style="color: white">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right" style="color: white">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="" >AK</a>
                </div>
            </div>
        </footer>

</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url(); ?>assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>


  <?php echo $this->session->flashdata('notify'); ?>
</html>
