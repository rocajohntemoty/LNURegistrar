<div class="row-fluid">
	<form class="form form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    	<fieldset>
        	<legend> Login Details </legend>
            <?php $username_error	=	form_error('username'); ?>
            <div class="control-group <?php if(!empty($username_error)){ echo 'error';} ?> ">
            	<label for="fname" class="control-label"> Username </label>
                <div class="controls">
                	<input type="text" name="username" value="<?php echo set_value('username'); ?>" />
                    <?php if(!empty($username_error)){ echo '<span class="help-inline">Username <span class="label label-warning">Required.</span> </span>';} ?>
                </div>
            </div>
            <?php $password_error	=	form_error('password'); ?>
            <div class="control-group <?php if(!empty($password_error)){ echo 'error';} ?> ">
            
            	<label for="fname" class="control-label"> Password </label>
                <div class="controls">
                	<input type="password" name="password" />
                    <?php if(!empty($password_error)){ echo '<span class="help-inline">'.form_error('password').'</span> </span>';} ?>
                </div>
            </div>
            <?php $cpassword_error	=	form_error('cpassword'); ?>
            <div class="control-group <?php if(!empty($cpassword_error)){ echo 'error';} ?> ">
            	<label for="fname" class="control-label"> Confirm Password </label>
                <div class="controls">
                	<input type="password" name="cpassword" />
                    <?php if(!empty($cpassword_error)){ echo '<span class="help-inline">Confirm Password <span class="label label-warning">Required.</span> </span>';} ?>
                </div>
            </div>
        </fieldset>
		<fieldset>
        	<legend>Personal Data</legend>
            <?php $fname	=	form_error('fname'); ?>
            <div class="control-group <?php if(!empty($fname)){ echo 'error';} ?> ">
            	<label for="fname" class="control-label"> First Name </label>
                <div class="controls">
                	<input type="text" name="fname" value=" <?php echo set_value("fname"); ?> "/>
                    <?php if(!empty($fname)){ echo '<span class="help-inline"> First Name <span class="label label-warning">Required.</span> </span>';} ?>
                </div>
            </div>
            <?php $mname	=	form_error('mname'); ?>
            <div class="control-group <?php if(!empty($mname)){ echo 'error';} ?> ">
            	<label for="fname" class="control-label"> Middle Name </label>
                <div class="controls">
                	<input type="text" name="mname" value=" <?php echo set_value("mname"); ?> " />
                    <?php if(!empty($mname)){ echo '<span class="help-inline"> Middle Name <span class="label label-warning">Required.</span> </span>';} ?>
                </div>
            </div>
            <?php $lname	=	form_error('lname'); ?>
            <div class="control-group <?php if(!empty($lname)){ echo 'error';} ?> ">
            	<label for="fname" class="control-label"> Last Name </label>
                <div class="controls">
                	<input type="text" name="lname" value=" <?php echo set_value("lname"); ?> " />
                    <?php if(!empty($lname)){ echo '<span class="help-inline"> Last Name <span class="label label-warning">Required.</span> </span>';} ?>
                </div>
            </div>
        </fieldset>
         <fieldset>
            <legend> Security Details </legend>
            <?php $security	=	form_error('security'); ?>
            <div class="control-group <?php if(!empty($security)){ echo 'error';} ?> ">
            	<label for="fname" class="control-label"> Input Security </label>
                <div class="controls">
                	<img src="<?php echo base_url(); ?>home/securityImage" title="Security Image" /> <br/>
                	<input type="text" name="security" placeholder="Input Security" />
                    <?php if(!empty($security)){ echo '<span class="help-inline">'.form_error('security').'</span>';} ?>
                </div>
            </div>
         </fieldset>
       
         <input type="submit" class="btn btn-primary" name="register" value="Signin" /> 
    </form>
</div>