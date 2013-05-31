<div class="row-fluid">
		<?php 
			echo validation_errors(); 
			$gm	=	isset($checker['get_user_app_GM'][0]->count)?$checker['get_user_app_GM'][0]->count:null;
			$app_tor_fstud  =    isset($checker['check_user_tor_applied_furtherstud'][0]->count)?$checker['check_user_tor_applied_furtherstud'][0]->count:null;
		?>
	  	<div class="alert alert-warning"> Your <a href="<?php echo base_url(); ?>applicant/clearance">Clearance</a> is <a href="<?php echo base_url(); ?>applicant/clearance">not yet done</a>. Please check your clearance.</div>
        <form method="post" action="<?php echo base_url(); ?>applications/applicationDocuments">
        	<fieldset>
            	<legend> Request for :</legend>
                <div class="alert alert-info">
                		<p><strong>Note: </strong></p>
                		<ol>
                         	<li><span class="label label-warning">Check</span> your wanted document(s).</li>
                            <li><p><strong>Note: </strong> <span class="label label-warning">Fields</span> with <b style="color:red;"> ( * ) </b> is  <span class="label label-warning">required.</span> </p></li>
                        </ol> 
                </div>
                <div class="row-fluid">
                	<div class="span12">  
                        
                        <div class="span6">
                        	<?php $level	= set_value('level'); ?>
                        	<label> Level<b style="color:red;"> ( * ) </b> </label>
                            <input type="radio" name="level" <?php if( $level == 1 ){ echo 'checked="checked"'; }?> value="1" /> Graduate &nbsp; &nbsp;
                            <input type="radio" name="level"  <?php  if( $level == 2 ){ echo 'checked="checked"'; }?>value="2" /> UnderGraduate <br /><br /><br />
                            <?php $typeofApp = set_value('typeofApp'); ?>
                            <label> Type of Application<b style="color:red;"> ( * ) </b> </label>
                            <input type="radio" name="typeofApp" <?php if( $typeofApp == 1 ){ echo 'checked="checked"'; }?> value="1" /> New &nbsp; &nbsp;
                            <input type="radio" name="typeofApp" <?php if( $typeofApp == 2 ){ echo 'checked="checked"'; }?>  value="2" /> Renewal <br /><br /><br />
                        </div>
                        <div class="span6">
                        	<?php $tor	=	set_value('tor'); ?>
                        	<input type="checkbox" name="tor" value=1 <?php if( $tor == 1 ){ echo 'checked="checked"'; }?> />
                                    &nbsp; Transcript of Records <br/><br/>
                                    <?php 
										$employment		   			 =	set_value('employment');
										$fstud				 		  =	set_value('fstud'); 
										$otherReasonFoTORApp			=	set_value('otherReasonFoTORApp');  
										$applicationfortorreason		=	set_value('applicationfortorreason'); 
									?>
                                    <ul style="list-style-type:none;"> <b>Reason(s)</b>
                                        <li> <input type="checkbox" name="employment" value="1" <?php if( $employment == 1 ){ echo 'checked="checked"'; }?>/> &nbsp; For Employment</li>
                                        <li> <input <?php if(!empty($app_tor_fstud)){ echo 'disabled="disabled"'; }?> type="checkbox" name="fstud" <?php if( $fstud == 1 ){ echo 'checked="checked"'; }?> value="1" /> &nbsp; <?php if(!empty($app_tor_fstud)){ echo '<span class="label label-warning">You have been issued</span> TOR for further studies.'; }else{ echo 'For Further Studies : <span class="label label-info"> Note: to be issued only ONCE</span>';} ?> </li>
                                        <li> <input type="checkbox" name="otherReasonFoTORApp" value="1" <?php if( $otherReasonFoTORApp == 1 ){ echo 'checked="checked"'; }?> /> &nbsp; Others <i> Please Specify</i> <br/><br/>
                                            <textarea name="applicationfortorreason"><?php if( !empty($applicationfortorreason)){ echo $applicationfortorreason; }?></textarea>
                                        </li>
                                    </ul>
                            <br /><br />
                            
                            <?php 
								$certification	=	set_value('certification'); 
								
								$certs		=	set_value('specifyCertification');
								$certificaitons	=	isset($_POST['specifyCertification'])?$_POST['specifyCertification']:null;
								$goodMoral	=	set_value('goodMoral'); 
							?>
                            
                            <input type="checkbox" name="certification" value=1 <?php if( $certification == 1 ){ echo 'checked="checked"'; }?> />&nbsp; Certification <i> ( Please Specify )</i> <br /><br />
                            <textarea name="specifyCertification" > <?php if( !empty($certificaitons) ){ echo $certificaitons; }?></textarea>
                            <br />
                            <input <?php if(!empty($gm)){ echo 'disabled="disabled"'; }?> type="checkbox" name="goodMoral" value=1 <?php if( $goodMoral == 1 ){ echo 'checked="checked"'; }?> />&nbsp; <?php if(!empty($gm)){ echo "<span class='label label-warning'>Your application for Good Moral is being processed.</span>"; }else{ echo "<span class='label label-info'>Good Moral</span>";}?>                           
                        </div>
                    </div>
                </div>
                <hr />
                
            </fieldset> 
            <br />
            <div class="alert alert-warning"> Your <a href="#">Clearance</a> is <a href="#">not yet done</a>. Please check your clearance.</div>
            <input name="applicationFOr" type="submit" class="btn btn-success" value="Request"/>
        </form>
</div>