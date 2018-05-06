
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
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Inventory
                </a>
            </div>

            <ul class="nav">
               
                <li class="active">
                    <a href="<?php echo site_url('stock/Received'); ?>">
                        <i class="ti-pencil-alt"></i>
                        <p>Stock Received</p>
                    </a>
                </li>

                   <li>
                    <a href="<?php echo site_url('stock/Returned'); ?>">
                        <i class="ti-pencil"></i>
                        <p>Stock Return</p>
                    </a>
                </li>

                 <li>
                    <a href="<?php echo site_url('stock/Present'); ?>">
                        <i class="ti-write"></i>
                        <p>Stock Present</p>
                    </a>
                </li>

                <li >
                    <a href="<?php echo site_url('invoice'); ?>">
                        <i class="ti-check-box"></i>
                        <p>Invoice</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('invoice/get_return'); ?>">
                        <i class="ti-notepad"></i>
                        <p>Invoice Return</p>
                    </a>
                </li>
              
                 <li>
                    <a href="<?php echo site_url('products'); ?>">
                        <i class="ti-package"></i>
                        <p>Products</p>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('products/categories/'); ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Category</p>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('student/add_departments'); ?>">
                        <i class="ti-printer"></i>
                        <p>Report</p>
                    </a>
                </li>
               
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin Panel</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                     
                         <li>
                            <a href="<?php echo site_url('account/signup'); ?>">
                                <i class="ti-user"></i>
                                <p><?php echo $_SESSION['admin_email']; ?></p>
                            </a>
                        </li>

                         <li>
                            <a href="<?php echo site_url('account/signup'); ?>" >
                                <i class="ti-pencil"></i>
                                <p>Register</p>
                            </a>
                        </li>

						<li>
                            <a href="<?php echo site_url('account/logout'); ?>">
								<i class="ti-back-left"></i>
								<p>Logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>