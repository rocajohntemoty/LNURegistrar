<div class="row-fluid">
	<button class="btn btn-success" data-toggle="modal" data-target="#myModal"> Add Registrar Administrator </button> <br/>
    
	<Table style="margin-top:10px;" class="table table-bordered tale-hover table-collapsed">
    	<thead>
        	<th> User ID </th>
        	<th> Username </th>
            <th> Name </th>
            <th> Action </th>
        </thead>
        <tbody>
        	<Tr>
            	<td> 1 </td>
            	<td> rocajohntemoty </td>
                <Td> John Temoty Homeres Roca</Td>
                <td>
                	<a class="btn btn-primary" href="#"> Edit </a> &nbsp; 
                    <a class="btn btn-danger" href="#">Delete</a>
                </td>
            </Tr>
            <Tr>
            	<td> 1 </td>
            	<td> rocajohntemoty </td>
                <Td> John Temoty Homeres Roca</Td>
                <td>
                	<a class="btn btn-primary" href="#"> Edit </a> &nbsp; 
                    <a class="btn btn-danger" href="#">Delete</a>
                </td>
            </Tr>
        </tbody>
    </Table>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Add Registrar Administrator</h3>
    </div>
    
    <div class="modal-body">
        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        	<fieldset>
            	<legend> Login Details </legend>
            	<label> Username </label>
                <input type="text" name="username"   placeholder="Username" /> <br/>
                <label> Password </label>
                <input type="password" name="password"   placeholder="Password" /> <br/>
                <label> Confirm Password </label>
                <input type="password" name="cpassword"   placeholder="Confirm Password" /> <br/>
            </fieldset>
            <fieldset>
            	<legend> Personal Details </legend>
            	<label> First Name </label>
                <input type="text" name="fname"   placeholder="First Name" /> <br/>
                <label> Middle Name </label>
                <input type="text" name="mname"   placeholder="Middle Name" /> <br/>
                <label> Last Password </label>
                <input type="text" name="lname"   placeholder="Last Name" /> <br/>
            </fieldset>
            <input type="submit" class="btn btn-success" value="Save" />
        </form>
    </div>
    
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
	</div>
</div>