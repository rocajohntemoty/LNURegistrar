<div class="row-fluid">
	<div class="alert alert-info"> <strong>Note: </strong> Fields with <span style="color:red;">( * )</span> <span class="label label-warning">required.</span> </div>
	<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <legend> Login Details </legend>
            <label> Username <span style="color:red;">( * )</span></label>
            <input type="text" name="username"   placeholder="Username" /> <br/>
            <label> Password </label>
            <input type="password" name="password"   placeholder="Password" /> <br/>
            <label> Confirm Password <span style="color:red;">( * )</span></label>
            <input type="password" name="cpassword"   placeholder="Confirm Password" /> <br/>
        </fieldset>
        <fieldset>
            <legend> Personal Details </legend>
            <label> First Name <span style="color:red;">( * )</span></label>
            <input type="text" name="fname"   placeholder="First Name" /> <br/>
            <label> Middle Name <span style="color:red;">( * )</span></label>
            <input type="text" name="mname"   placeholder="Middle Name" /> <br/>
            <label> Last Password <span style="color:red;">( * )</span></label>
            <input type="text" name="lname"   placeholder="Last Name" /> <br/>
        </fieldset>
        <input type="submit" class="btn btn-success" value="Save" />
    </form>
</div>