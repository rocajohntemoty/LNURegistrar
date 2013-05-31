<Div class="row-fluid">
	<?php echo validation_errors();?>
	<form  method="post" action="<?php echo base_url(); ?>applications/editpersonalinfo">
        <fieldset>
            <legend> Personal Information </legend>
            <div class="span12">
                <div class="span6">
                <label> First Name <b style="color:red;"> ( * ) </b></label>
                <input type="text" value="<?php if(isset($userData[0]->fname)){ echo $userData[0]->fname; }else{ echo set_value('fname'); } ?>" name="fname"/> <br/>
                 <label> Maiden Name  <b style="color:red;"> ( * ) </b></label>
                <input type="text" value="<?php if(isset($userData[0]->mname)){ echo $userData[0]->mname; }else{ echo set_value('mname'); }  ?>" name="mname"/> <br/>
                 <label> Family Name <b style="color:red;"> ( * ) </b> </label>
                <input type="text" value="<?php if(isset($userData[0]->lname)){ echo $userData[0]->lname; }else{ echo set_value('lname'); }  ?>" name="lname"/> <br/>
                <label> Citizenship </label>
                <input type="text" value="<?php if(isset($userData[0]->citizenship)){ echo $userData[0]->citizenship; }else{ echo set_value('citizenship'); }  ?>" name="citizenship"/>
                <br/>
                 <label> Religion </label>
                <input type="text" value="<?php if(isset($userData[0]->religion)){ echo $userData[0]->religion; }else{ echo set_value('religion'); }  ?>" name="religion"/> <br/>
                 <label> Civil Status </label>
                <select name="civilStatus">
                    <option <?php if(isset($userData[0]->religion) && $userData[0]->religion == "Single"){ echo "selected";  }else{ $rel	=	set_value('religion'); if(!empty($rel)){ echo "selected"; }}  ?> value="Single">Single</option>
                    <option <?php if(isset($userData[0]->religion) && $userData[0]->religion == "Married"){ echo "selected";  }else{ $rel	=	set_value('religion'); if(!empty($rel)){ echo "selected"; }}  ?> value="Married">Married</option>
                    <option  <?php if(isset($userData[0]->religion) && $userData[0]->religion == "Widowed"){ echo "selected";  }else{ $rel	=	set_value('religion'); if(!empty($rel)){ echo "selected"; }}  ?> value="Widowed">Widowed</option>
                </select>
                <label> Contact Number </label>
                <input type="text" value="<?php if(isset($userData[0]->contact)){ echo $userData[0]->contact; }else{ echo set_value('contact'); }  ?>" name="contact"/> <br/>
                <br/>
                </div>
                <div class="span6">
                    <label> Student Number <b style="color:red;"> ( * ) </b></label>
                    <input type="text" value="<?php if(isset($userData[0]->studentnumber)){ echo $userData[0]->studentnumber; }else{ echo set_value('studentnumber'); }  ?>" name="studentnumber"/> <br/>
                     <label> Date Of Birth </label>
                            <div class="input-append date" id="CheckDate" data-date="1990-02-04" data-date-format="yyyy-mm-dd">
                           
    <input class="span12" name="dob" size="16" type="text" value="<?php if(isset($userData[0]->dob)){ echo $userData[0]->dob; }else{ echo set_value('dob'); }  ?>">
    <span class="add-on"><i class="icon-th"></i></span>
     
    </div> <span style="margin-left:30px;" class="help-inline"> yyyy-mm-dd </span>
                     <label> Place Of Birth </label>
                    <input type="text" value="<?php if(isset($userData[0]->pob)){ echo $userData[0]->pob; }else{ echo set_value('pob'); }  ?>" name="pob"/> <br/>
                    <label> Name Of Father </label>
                <input type="text" value="<?php if(isset($userData[0]->nameoffather)){ echo $userData[0]->nameoffather; }else{ echo set_value('nameoffather'); }  ?>" name="nameoffather"/> <br/>
                <label> Name Of Mother </label>
                <input type="text" value="<?php if(isset($userData[0]->nameofmother)){ echo $userData[0]->nameofmother; }else{ echo set_value('nameofmother'); }  ?>" name="nameofmother"/> <br/>
                <label> Name Of Spouse </label>
                <input type="text" value="<?php if(isset($userData[0]->nameofspouse)){ echo $userData[0]->nameofspouse; }else{ echo set_value('nameofspouse'); }  ?>" name="nameofspouse"/> <br/>
                <label>Permanent Address <b style="color:red;"> ( * ) </b></label>
                <textarea name="address">
                	<?php if(isset($userData[0]->address)){ echo $userData[0]->address; }else{ echo set_value('address'); }  ?>
                </textarea>
                <br/>
                </div>
            </div>
        </fieldset>
        <input name="personalDetails" type="submit" class="btn btn-success" value="Save Personal Details" />
  </form>
</Div>