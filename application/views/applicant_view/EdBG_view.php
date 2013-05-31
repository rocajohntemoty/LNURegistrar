<div class="row-fluid">
	<?php echo validation_errors(); ?>
	 <form method="post" action="<?php echo base_url(); ?>applications/editEducationalBackground">
            <fieldset>
                <legend> Educational Background </legend>
                <table class="table">
                	<thead>
                    	<th></th>
                        <th> Name Of School </th>
                        <th> Year Graduated </th>
                    </thead>
                    <Tbody>
                    	<tr>
                        	<td> Elementary<b style="color:red;"> ( * ) </b> </td>
                            <td> <input type="text" name="nameOfElemSchool" value="<?php if(isset($userData[0]->nameOfElemSchool)){ echo $userData[0]->nameOfElemSchool; }else{ echo set_value('nameOfElemSchool'); }  ?>" /><b style="color:red;"> ( * ) </b></td>
                            <td> <input class="span6" type="text" name="dateOfElemGraduate" value="<?php if(isset($userData[0]->dateOfElemGraduate)){ echo $userData[0]->dateOfElemGraduate; }else{ echo set_value('dateOfElemGraduate'); }  ?>"/><b style="color:red;"> ( * ) </b> </td>
                        </tr>
                        <tr>
                        	<td> Secondary<b style="color:red;"> ( * ) </b> </td>
                            <td> <input type="text" name="nameOfSecSchool" value="<?php if(isset($userData[0]->nameOfSecSchool)){ echo $userData[0]->nameOfSecSchool; }else{ echo set_value('nameOfSecSchool'); }  ?>" /><b style="color:red;"> ( * ) </b></td>
                            <td> <input class="span6" type="text" name="dateOfSecGraduate" value="<?php if(isset($userData[0]->dateOfSecGraduate)){ echo $userData[0]->dateOfSecGraduate; }else{ echo set_value('dateOfSecGraduate'); }  ?>" /><b style="color:red;"> ( * ) </b> </td>
                        </tr>
                        <tr>
                        	<td> Undergraduate </td>
                            <td> <input type="text" name="nameOfUnderGradSchool" value="<?php if(isset($userData[0]->nameOfUnderGradSchool)){ echo $userData[0]->nameOfUnderGradSchool; }else{ echo set_value('nameOfUnderGradSchool'); }  ?>" /></td>
                            <td> <input class="span6" type="text" name="dateOfUnderGradGraduate" value="<?php if(isset($userData[0]->dateOfUnderGradGraduate)){ echo $userData[0]->dateOfUnderGradGraduate; }else{ echo set_value('dateOfUnderGradGraduate'); }  ?>" /> </td>
                        </tr>
                        <tr>
                        	<td> Graduate </td>
                            <td> <input type="text" name="nameOfGradSchool" value="<?php if(isset($userData[0]->nameOfGradSchool)){ echo $userData[0]->nameOfGradSchool; }else{ echo set_value('nameOfGradSchool'); }  ?>" /></td>
                            <td> <input class="span6" type="text" name="dateOfGradGraduate" value="<?php if(isset($userData[0]->dateOfGradGraduate)){ echo $userData[0]->dateOfGradGraduate; }else{ echo set_value('dateOfGradGraduate'); }  ?>" /> </td>
                        </tr>
                    </Tbody>
                </table>
            </fieldset>
            <input name="educationalBackgroundDetails" type="submit" class="btn btn-success" value="Save Educational Background" />
    </form>
</div>