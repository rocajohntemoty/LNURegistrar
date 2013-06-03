<?php
	Class Applications extends CI_Controller{
		
		private $goodMoral			   =	0;
		private $tor		  			 = 	0;
		private $otherReasonFoTORApp	 =	0;
		private $certification		   =	0;
		private $specifyCertification	=	0;
		private $employment			  =	0;
		private $fstud				   =	0;
		private $applicationfortorreason	=	0;
		
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->library('encrypt');
			
			$this->load->model('application_model');
		}
		
		public function editpersonalinfo(){
			
			$id	=	$this->encrypt->decode($this->session->userdata('userDataId'));
			
			if(isset($_POST['personalDetails'])){
				
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('fname',"First Name","required|xss_clean");
				$this->form_validation->set_rules('mname',"Middle Name","required|xss_clean");
				$this->form_validation->set_rules('lname',"Last Name","required|xss_clean");
				$this->form_validation->set_rules('religion',"Religion","xss_clean|max_length[100]");
				$this->form_validation->set_rules('citizenship',"Citizenship","xss_clean|max_length[100]");
				$this->form_validation->set_rules('civilStatus',"civilStatus","xss_clean|max_length[32]");
				$this->form_validation->set_rules('contact',"Contact","xss_clean|max_length[100]");
				$this->form_validation->set_rules('studentnumber',"studentnumber","xss_clean|is_natural|max_length[32]");
				$this->form_validation->set_rules('dob',"Date of Birth","xss_clean|max_length[32]");
				$this->form_validation->set_rules('pob',"Place of Birth","xss_clean");
				$this->form_validation->set_rules('nameoffather',"Name of Father","xss_clean|max_length[32]");
				$this->form_validation->set_rules('nameofmother',"Name of Mother","xss_clean|max_length[32]");
				$this->form_validation->set_rules('nameofspouse',"Name of Spouse","xss_clean|max_length[32]");
				$this->form_validation->set_rules('address',"Address","required|xss_clean");
				
				$this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
				if($this->form_validation->run()	==	false ){
					$data['js']		 = array(
										"public/js/bootstrap-datepicker.js",
										"public/js/datepicker.js"
									 );
					$data['css']		= array("public/css/datepicker.css");
					$data['content']	= "personalInfo_view";
					$this->load->view("templates/applicantView_template",$data);
				}else{
					$editUser	=	$this->application_model->editpersonalinfo( $id );
					echo "Success";
				}
			}else{
				show_404();
			}
		}
		public function editlogininfo(){
			if(isset($_POST['editLoginDetails'])){
				
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('username',"Username",'required|xss_clean');
				$this->form_validation->set_rules('password','Password',"required|callback_checkoldpassword");
				$this->form_validation->set_rules('cpassword','Confirm Password',"required|xss_clean");
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
				
				if($this->form_validation->run() ==  false){
					$data['content']	= "logininfo_view";
					$this->load->view("templates/applicantView_template",$data);
				}else{
					echo "Success";
				}
			}else{
				show_404();
			}
		}
		public function edituserlnuhistory(){
		
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('course','Course','required');
			$this->form_validation->set_rules('numsemsandsums','Number of Summer and Semesters','required|is_numeric');
			$this->form_validation->set_rules('fad','First Attendance in LNU field','required');
			$this->form_validation->set_rules('lad','Last Attendance in LNU field','required');
			$this->form_validation->set_rules('dog','Date Of Graduation field','required');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
			
			if($this->form_validation->run() ==  false){
					$data['content']	= "userlnuHistory";
					$this->load->view("templates/applicantView_template",$data);
			}else{
				$id	=	$this->encrypt->decode($this->session->userdata('userDataId'));
				
				$editLog	=	$this->application_model->edituserlnuhistory( $id );
				
				if($editLog){	
					echo "Success";
				}else{
					echo "Failed to edit!";
				}
			}
			
		}
		public function checkoldpassword($password = null){
			$this->load->library('form_validation');
			$id	=	$this->encrypt->decode($this->session->userdata('userDataId'));
			$userpassword	=	$this->application_model->getUserpass($id);
			$userpass	   = "";
			if( !empty($userpassword) ){
				$userpass		=	 $userpassword[0]->password;
			}
			if( md5(sha1($password))	== $userpass ){
				return true;
			}else{
				$this->form_validation->set_message("checkoldpassword","The password did not match from old password.");
				return false;
			}
		}
		public function editEducationalBackground(){
			
			if(isset($_POST['educationalBackgroundDetails'])){
				
				$this->load->library('form_validation');
				
				$id	=	$this->encrypt->decode($this->session->userdata('userDataId'));
				
				$this->form_validation->set_rules('nameOfElemSchool','Name of elementary school','required|xss_clean');
				$this->form_validation->set_rules('dateOfElemGraduate','Date of graduated in elementary','required|xss_clean|max_length[4]|is_natural');
				$this->form_validation->set_rules('nameOfSecSchool','Name of elementary school','required|xss_clean');
				$this->form_validation->set_rules('dateOfSecGraduate','Date graduated in Secondary','required|xss_clean|max_length[4]|is_natural');
				$this->form_validation->set_rules('nameOfUnderGradSchool','Name Of elementary School','xss_clean');
				$this->form_validation->set_rules('dateOfUnderGradGraduate','Date graduated in Undergraduate','xss_clean|max_length[4|is_natural]');
				$this->form_validation->set_rules('nameOfGradSchool','Name Of graduate school','xss_clean');
				$this->form_validation->set_rules('dateOfGradGraduate','Name Of elementary school','xss_clean|max_length[4]|is_natural');
				
				$this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
				
				if($this->form_validation->run()	==	false ){
					$data['content']	= "EdBG_view";
					$this->load->view("templates/applicantView_template",$data);
				}else{
					$editUserEdBG	=	$this->application_model->editEducationalBackground( $id );
					if($editUserEdBG){
						echo "Success";
					}else{
						echo "Error";
					}
				}
			}else{
				show_404();
			}
		}
		public function applicationDocuments(){
			
			$this->load->library('encrypt');
			$encodedId	=	$this->session->userdata('userDataId');
			$userID	=	isset($encodedId)?$encodedId:null;
			
			$userId	= $this->encrypt->decode($userID);
			
			
			
			$this->tor					    =	$this->input->post('tor');
			$this->employment			     =	$this->input->post('employment');
			$this->fstud				 	  =	$this->input->post('fstud');
			$this->otherReasonFoTORApp		=	$this->input->post('otherReasonFoTORApp');
			$this->applicationfortorreason	=	$this->input->post('applicationfortorreason');
			$this->certification			  =	$this->input->post('certification');
			$this->specifyCertification	   =	$this->input->post('specifyCertification');
			$this->goodMoral				  = 	$this->input->post('goodMoral');
			
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('level',"Level",									"required|is_numeric");
			$this->form_validation->set_rules('typeofApp',"Type Of Application", 				  "required|is_numeric");
			$this->form_validation->set_rules('tor',"Transcript Of Records",					  "is_numeric|callback_checkIfreasonIsChecked");
			$this->form_validation->set_rules('employment',"Application For Documents",		   "is_numeric|callback_checkifTORisCheckedAndIfNotEmptyEmployment");
			$this->form_validation->set_rules('fstud',"Application For Documents",				"is_numeric|callback_checkifTORisCheckedAndIfNotEmptyfstud");
			$this->form_validation->set_rules('otherReasonFoTORApp',"Specify TOR application reason","callback_checkTORReasoneEmptyAndIfTORisChecked");
			$this->form_validation->set_rules('applicationfortorreason',"Specify reason for TOR application.",		"min_length[1]|callback_checkIfReasonForTorisChecked");
			$this->form_validation->set_rules('certification',"Specify Certification",				  "is_numeric|callback_checkIfCertSpecsisNotEmpty");
			//$this->form_validation->set_rules('specifyCertification',"Specify Certification",		   "callback_checkCertificationIsChecked");
			$this->form_validation->set_rules('goodMoral',"Good Moral",								 "is_numeric");
			$this->form_validation->set_rules('applicationFOr',"Specify your application",		"callback_checkifApplicationEmpty");
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
			
			if($this->form_validation->run() == false ){
				$data['js']		 = array(
										"public/js/bootstrap-datepicker.js",
										"public/js/datepicker.js"
									 );
				$data['css']		= array("public/css/datepicker.css");
				$data['active']	 = 1;
				$data['content']	=	"applydocuments";
				$this->load->view("templates/applicantView_template",$data);
			}else{
				$insertRequest	=	$this->application_model->applications( $userId );
				
				if($insertRequest){
					$data['active']	 = 1;
					$data['content']	=	"success_pages/application_success_page";
					$this->load->view("templates/applicantView_template",$data);
				}else{
					show_404();
				}
			}
			
			
		}
		public function checkifApplicationEmpty(){
			$this->load->library('form_validation');
			
			if(empty($this->tor) && empty($this->certification) && empty($this->goodMoral)){
				$this->form_validation->set_message('checkifApplicationEmpty',"You did not <span class='label label-info'>Specify</span> what <span class='label label-info'>document(s)</span> you are applying for.");
				return false;
			}else{
				return true;
			}
		}
		
		public function checkifTORisCheckedAndIfNotEmptyEmployment(){
			$this->load->library('form_validation');
			if(empty($this->tor) && !empty($this->employment)){
				$this->form_validation->set_message("checkifTORisCheckedAndIfNotEmptyEmployment","You have to check the TOR Checkbox.");
				return false;
			}else if(empty($this->tor) && empty($this->employment)){
				return true;
			}else{
				return true;
			}
		}
		
		public function checkifTORisCheckedAndIfNotEmptyfstud(){
			$this->load->library('form_validation');
			if(empty($this->tor) && !empty($this->fstud)){
				$this->form_validation->set_message("checkifTORisCheckedAndIfNotEmptyfstud","You have to check the TOR Checkbox.");
				return false;
			}else if(empty($this->tor) && empty($this->fstud)){
				return true;
			}else{
				return true;
			}
		}
		
		public function checkifTORisChecked(){
			$this->load->library('form_validation');
			if(empty($this->tor)){
				$this->form_validation->set_message("checkifTORisChecked","You have to check the TOR Checkbox.");
				return false;
			}else{
				return true;
			}
		}
		
		public function checkIfreasonIsChecked(){
			$this->load->library('form_validation');
			if(empty($this->employment) && !empty($this->fstud) && empty($this->otherReasonFoTORApp) && empty($this->tor)){
				return true;
			}
			if(empty($this->employment) && empty($this->fstud) && empty($this->otherReasonFoTORApp) && !empty($this->tor)){ 
				$this->form_validation->set_message("checkIfreasonIsChecked","You did not <span class='label label-info'>Specify your reason for TOR application</span>. ");
				return false;
			}
		}
		
		public function checkIfCertSpecsisNotEmpty(){
			$this->load->library('form_validation');
			if(empty($this->specifyCertification) && !empty($this->certification)){
				$this->form_validation->set_message('checkIfCertSpecsisNotEmpty',"You did not Specify your Certification.");
				return false;
			}else if(empty($this->specifyCertification) && empty($this->certification)){
				return true;
			}else if( !empty($this->specifyCertification) && empty($this->certification) ){
				$this->form_validation->set_message('checkIfCertSpecsisNotEmpty',"You did not check <span class='label label-info'>Certification</span>. Please check and click request to proceed.");
				return false;
			}else{
				return true;
			}
		}
		
		public function checkIfReasonForTorisChecked(){
			$this->load->library('form_validation');
			if(empty($this->otherReasonFoTORApp) && !empty($this->applicationfortorreason)){
				$this->form_validation->set_message('checkIfReasonForTorisChecked',"Check the Other reason before you fill out other TOR application reason.");	
				return false;
			}
		}
		
		public function checkTORReasoneEmptyAndIfTORisChecked(){
			$this->load->library('form_validation');
			
			if(empty($this->tor) && !empty($this->otherReasonFoTORApp)){
				$this->form_validation->set_message("checkTORReasoneEmptyAndIfTORisChecked","You did not <span class='label label-info'>check the TOR checkbox</span>.");
				return false;
			}
			if(empty($this->applicationfortorreason) && !empty($this->otherReasonFoTORApp)){
				$this->form_validation->set_message("checkTORReasoneEmptyAndIfTORisChecked","You did not specify your other reason for TOR application.");
				return false;
			}
		}
		public function EditLNUHistory(){
			$this->load->library('form_validation');
		}
	}
?>