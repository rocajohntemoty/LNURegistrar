<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome Applicant : Change Name here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
	  .cheves{
		  margin:10px 8px 6px 2px;
	  }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/todc-bootstrap.css" rel="stylesheet">

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">LNU File Application </a>
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
        </div>
      </div>
    </div>

  <div class="container-fluid">
<div class="row-fluid">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
  			<li <?php if(isset($active) && $active === 1 ){echo 'class="active"';} ?>> <i class="cheves pull-right icon-chevron-right"></i><a href="<?php echo base_url();?>administrator/notification"> <i class="icon-hand-right"></i> Notification </a> </li>          
            <li <?php if(isset($active) && $active === 2 ){echo 'class="active"';} ?>> <i class="cheves pull-right icon-chevron-right"></i><a href="<?php echo base_url();?>administrator/applicantmanager" > <i class="icon-envelope"></i> Applicants Manager </a> </li>
            <li <?php if(isset($active) && $active === 3 ){echo 'class="active"';} ?>> <i class="cheves pull-right icon-chevron-right"></i><a href="<?php echo base_url();?>administrator/documentapplicationmanager" > <i class="icon-envelope"></i> Document Applicantion Manager </a> </li>
            <li <?php if(isset($active) && $active === 4 ){echo 'class="active"';} ?>> <i class="cheves pull-right icon-chevron-right"></i><a href="<?php echo base_url();?>administrator/accountingmanager" > <i class="icon-envelope"></i> Accounting Manager </a> </li>
            <li <?php if(isset($active) && $active === 5 ){echo 'class="active"';} ?>> <i class="cheves pull-right icon-chevron-right"></i><a href="<?php echo base_url();?>administrator/libadministratormanager" > <i class="icon-ok-circle"> </i> Library Administrator Manager </a> </li>
            <li <?php if(isset($active) && $active === 6 ){echo 'class="active"';} ?>> <i class="cheves pull-right icon-chevron-right"></i><a href="<?php echo base_url();?>administrator/registrarmanager" > <i class="icon-ok-circle"> </i> Registrar Administrator Manager </a> </li>
            <li <?php if(isset($active) && $active === 7 ){echo 'class="active"';} ?>> <i class="cheves pull-right icon-chevron-right"></i><a href="<?php echo base_url();?>administrator/osamanager" > <i class="icon-ok-circle"> </i> OSA Administrator Manager </a> </li>
            <li <?php if(isset($active) && $active === 8 ){echo 'class="active"';} ?>> <i class="cheves pull-right icon-chevron-right"></i><a href="<?php echo base_url();?>administrator/graduateschoolmanager" > <i class="icon-ok-circle"> </i> Graduate School Administrator Manager </a> </li>
        </ul>
    </div><!--/span3-->
    
    <div class="span9">
    	
    

