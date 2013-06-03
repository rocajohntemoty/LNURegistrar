<div class="row-fluid"> 
	<?php echo validation_errors(); ?>
    <form action="<?php echo base_url(); ?>applications/edituserlnuhistory" method="post" >
    	<fieldset>
            <legend> My LNU History </legend>
            <div class="span12">
                <div class="span6">
                    <label> Course<b style="color:red;"> ( * ) </b> </label>
                    <input type="text" name="course" value="<?php if(isset($userData[0]->course)){ echo $userData[0]->course; }else{ echo set_value('course'); }  ?>"/> <br/>
                    <label> First Attendande in LNU <b style="color:red;"> ( * ) </b></label>
                    <input name="fad" type="text" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="102/2012" class="sdateMonths" value="<?php if(isset($userData[0]->firstattendance)){ echo $userData[0]->firstattendance; }else{ echo set_value('fad'); }  ?>" size="16"/>
                    <label>Number of semesters and summers<b style="color:red;"> ( * ) </b> </label>
                    <input type="text" name="numsemsandsums" value="<?php if(isset($userData[0]->numofsemsandsums)){ echo $userData[0]->numofsemsandsums; }else{ echo set_value('numsemsandsums'); }  ?>"/>
                </div>
                <div class="span6">
                    <label> Major/Specialization</label>
                    <input type="text" name="majorspecialization" value="<?php if(isset($userData[0]->majorspecialization)){ echo $userData[0]->majorspecialization; }else{ echo set_value('majorspecialization'); }  ?>"/>
                    <label> Last Attendance in LNU <b style="color:red;"> ( * ) </b></label>
                    <input name="lad" type="text" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="102/2012" class="dateMonths" value="<?php if(isset($userData[0]->lastattendance)){ echo $userData[0]->lastattendance; }else{ echo set_value('lad'); }  ?>" size="16"/>
                    <label> Date of graduation <b style="color:red;"> ( * ) </b></label>
                    <input type="text" name="dog" data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="102/2012" class="dateMonths" value="<?php if(isset($userData[0]->dogInLNU)){ echo $userData[0]->dogInLNU; }else{ echo set_value('dog'); }  ?>" size="16"/>
                </div><br/>
            </div>
            <br/><br/>
            <input type="submit" name="lnuhistory" class="btn btn-success" value="Save My History" />
        </fieldset>
    </form>
</div>