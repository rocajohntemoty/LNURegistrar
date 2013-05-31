<div class="row-fluid">
	<div class="alert alert-info">
    	<p><strong>Note: </strong> <span class="label label-warning">Fields</span> with <b style="color:red;"> ( * ) </b> is  <span class="label label-warning">required.</span> </p>        
    </div>
	<?php if(isset($userData)){ ?>
         <?php $data['userData'] = $userData; $this->load->view('applicant_view/logininfo_view',$data); ?>
    	 <?php $data['userData'] = $userData; $this->load->view('applicant_view/personalInfo_view',$data); ?>
         <?php $data['userData'] = $userData; $this->load->view('applicant_view/EdBG_view',$data); ?>
         <?php $data['userData'] = $userData; $this->load->view('applicant_view/userlnuHistory',$data); ?>
	<?php }?>
</div>