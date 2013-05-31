<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> LNU File Application </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/todc-bootstrap.css" rel="stylesheet">
	<?php if(isset($css) && is_array($css)){ ?>
			<?php foreach($css as $keys => $values): ?>
            	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/home_css/<?php echo $values; ?>.css" />
            <?php endforeach; ?>	
	<?php }?>
    <style type="text/css">
		 body {
			padding-top: 20px;
			padding-bottom: 40px;
			}
			
		.container-narrow {	
			margin: 0 auto;
			max-width: 700px;
		}
	</style>
  </head>
  <body>
  <div class="container-narrow">

      <div class="masthead">
      	
        <ul class="nav nav-pills pull-right">
          <li <?php if(isset($active) && $active === 1 ){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>home">Home</a></li>
          <li <?php if(isset($active) && $active === 2 ){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>Sign-In"> Sign In </a></li>
          <li <?php if(isset($active) && $active === 3 ){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>Contact-Us"> Contact Us </a></li>
        </ul>
        <h3 class="muted">LNU File Application</h3>
        
     	 <hr>
      </div>
  