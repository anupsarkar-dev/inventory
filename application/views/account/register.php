
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

    <title>Online Parking Provider</title>

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
 style="background-image: url('<?php echo base_url(); ?>assets/img/bg5.jpg');
 background-color: #68b3c8;
 background-blend-mode:overlay; ">
        <!-- Navbar -->
       
        <!-- End Navbar -->
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="full-page register-page section-image" data-color="orange" data-image="../../assets/img/bg5.jpg">
            <div class="content">
                <div class="container">
                    <div class="card card-register card-plain text-center">
                        <div class="card-header ">
                            <div class="row  justify-content-center">
                                <div class="col-md-12" style="margin-left: 100px">
                                    <div class="header-text">
                                        <h2 class="card-title">Inventory </h2>
                                        <h4 class="card-subtitle">Register new user account </h4>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-5 ml-auto" id="sideBar" style="visibility: hidden;">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="nc-icon nc-circle-09"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Free Account</h4>
                                            <p>Register free without any charge, provide your credintials to ease the future login.</p>
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
                                            <p>Here you can write a feature description for your product, let the users know what is the value that you give them.</p>
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
                                            <p>Here you can write a feature description for your product, let the users know what is the value that you give them.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mr-auto">
        <?php $attributes = array("class" => "form-horizontal", "id" => "registerForm", "name" => "registerForm");
          echo form_open("account/register", $attributes);?>
                                 
                                        <div class="card card-plain">
                                            <div class="content">


                                                <div class="form-group">
                                                    <input type="text" placeholder="Your Full Name" id="fname" name="fname" class="form-control" value="<?php echo set_value('fname'); ?>">

                                                    <span class="text-danger"><?php echo form_error('fname'); ?></span>
                                                </div>


                                                <div class="form-group">
                                                    <input type="text" placeholder="User Name" id="uname" name="uname" class="form-control" value="<?php echo set_value('uname'); ?>">

                                                      <span class="text-danger"><?php echo form_error('uname'); ?></span>
                                                </div>


                                                <div class="form-group">
                                                    <input type="number" placeholder="Mobile No." id="mobile" name="mobile" class="form-control" value="<?php echo set_value('mobile'); ?>">

                                                      <span class="text-danger"><?php echo form_error('mobile'); ?></span>
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" placeholder="Enter email" id="email" name="email"  class="form-control" value="<?php echo set_value('email'); ?>">

                                                      <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                </div>


                                                <div class="form-group">
                                                    <input type="password" placeholder="Password"  id="pass" name="pass"class="form-control" value="<?php echo set_value('pass'); ?>">

                                                      <span class="text-danger"><?php echo form_error('pass'); ?></span>
                                                </div>


                                             

                                                <div class="form-group">
                                                   
                                                       <select id="type" name="type" class="form-control" style="color: orange" >
                                                           <option value="" selected="selected">Select Account Type</option>

                                                           <option value="Super Admin">Super Admin</option>
                                                           <option value="Admin">Admin</option>
                                                       </select> 

                                                         <span class="text-danger"><?php echo form_error('type'); ?></span>
                                                  
                                                </div>
                                            </div>
                                            <div class="footer text-center">
                                                <button type="submit" class="btn btn-fill btn-neutral btn-wd">Create Account</button>
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
                                Hello Hi Parking
                            </a>
                        </li>
                        <li>
                            <a href="" style="color: white">
                               About Us
                            </a>
                        </li>
                        <li>
                            <a href="" style="color: white">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
               
                <div class="copyright pull-right" style="color: white" >
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="" >Anup Sarkar</a>
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

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

        });
    </script>

</html>
