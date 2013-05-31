<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome Applicant : Change Name here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
	  .prettyprint {
	  padding: 8px;
	  background-color: #f7f7f9;
	  border: 1px solid #e1e1e8;
	}
	.prettyprint.linenums {
	  -webkit-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
		 -moz-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
			  box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
	}
    </style>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/todc-bootstrap.css" rel="stylesheet">
	<?php 
		if(isset($css) && is_array($css)){
			foreach($css as $keys => $valueses ){
				?>
                	<link href="<?php echo base_url().$valueses; ?>" type="text/css" rel="stylesheet" />
                <?php
			}
		}
	?>
  </head>

  <body>
	
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">LNU File Application </a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right visible-desktop">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"> <a href="<?php echo base_url(); ?>applicant"><i class="icon-white icon-home"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>applicant/notification"> <i class="icon-white icon-star"></i> Notification </a></li>
              <li><a href="<?php echo base_url(); ?>applicant/profile"><i class="icon-white icon-user"></i> Profile </a></li>
              <li><a href="<?php echo base_url(); ?>applicant/contactus"><i class="icon-white icon-envelope"></i> Contacts Us </a></li>
              <li><a href="<?php echo base_url(); ?>applicant/logout"><i class="icon-white icon-ok-circle"> </i> Logout </a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

  <div class="container-fluid">
<div class="row-fluid">
    <div class="span3" style="position:relative;">
        <ul class="nav nav-tabs nav-stacked ">
        	<p class="hiddenss-desktop"> Logged in as <a href="#"> John Temoty Roca </a> </p>
        	<li class="nav-header"> Transaction </li>
  			<li <?php if(isset($active) && $active === 1){ echo "class='active'"; }?>> <a href="<?php echo base_url(); ?>applicant/applydocuments"> <i class="icon-hand-right"></i> Apply Documents </a> </li>          
            <li <?php if(isset($active) && $active === 2){ echo "class='active'"; }?>> <a href="<?php echo base_url(); ?>applicant/applicantionHistory" > <i class="icon-envelope"></i> Application History </a> </li>
            <li <?php if(isset($active) && $active === 3){ echo "class='active'"; }?>> <a href="<?php echo base_url(); ?>applicant/clearance" > <i class="icon-ok-circle"> </i> Clearance </a> </li>
        </ul>
    </div><!--/span3-->
    
    <div class="span9 prettyprint" >
    	
    

