<div class="row-fluid">
	<?php echo validation_errors(); ?>
	<form method="post" method="post" action="<?php echo base_url(); ?>applications/editlogininfo">
        <fieldset>
            <legend> Login Information </legend>
            <div class="span12">
                <div class="span6">
                    <label> Username </label>
                    <input type="text" value="<?php if(isset($userData[0]->username)){ echo $userData[0]->username; }else{ echo set_value('username'); } ?>" name="username" />
                </div>
                <div class="span6">
                    <label> Old Password </label>
                    <input type="password" name="password" /> <br/>
                    <label> New Password </label>
                    <input type="password" name="cpassword" />
                </div>
            </div>
        </fieldset>
        <input type="submit" name="editLoginDetails" class="btn btn-success" value=" Save Login Detalis" />
     </form>
</div>