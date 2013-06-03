<?php
	Class Applicant extends CI_Controller{
		
		private $user_id	=	0;
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->library('encrypt');
			$this->load->model('applicant_model');
			$this->user_id	=	$this->encrypt->decode($this->session->userdata('userDataId'));
		}
		
		public function index(){
			$username	=	$this->session->userdata('userDataName');
			
			if(empty($username)){
				redirect('home');
			}else{
					$data['content']	=	"home";
				$this->load->view("templates/applicantView_template",$data);
			}
			
		}
		
		public function profile(){
			
			$username	=	$this->session->userdata('userDataName');
			
			if(empty($username)){
				redirect('home');
			}else{
				$this->load->library('form_validation');
				
				$user_id			=	$this->encrypt->decode($this->session->userdata('userDataId'));
				$getUserDataLog	 =	$this->applicant_model->getUser( $user_id );
				$data['userData']   =	$getUserDataLog;
				$data['js']		 = array(
										"public/js/bootstrap-datepicker.js",
										"public/js/datepicker.js"
									 );
				$data['css']		= array("public/css/datepicker.css");
				$data['content']	= "profile";
				$this->load->view("templates/applicantView_template",$data);
			}
		}
		
		public function notification(){
			$data['content']	=	"notification";
			$this->load->view("templates/applicantView_template",$data);	
		}
		
		public function contactus(){
			$data['content']	=	"contactus";
			$this->load->view("templates/applicantView_template",$data);	
		}
		
		public function logout(){
		}
		
		public function example(){
			$this->load->view('applicant_view/example');
		}
		
		public function applydocuments(){
			$this->load->model('application_model');
			$this->load->library('form_validation');
			
			$data['js']		 = array(
										"public/js/bootstrap-datepicker.js",
										"public/js/datepicker.js"
									 );
			$data['css']		= array("public/css/datepicker.css");
			$data['active']	 = 1;
			
			$data['content']	=	"applydocuments";
			$check_application	=	$this->application_model->check_user_app( $this->user_id );
			$data['checker']	= $check_application;
			$this->load->view("templates/applicantView_template",$data);	
		}
		
		public function applicationHistory(){
			
			$data['app_for_diploma']	=	$this->applicant_model->app_for_diploma( $this->user_id );
			$data['app_for_certification']	=	$this->applicant_model->app_for_certification( $this->user_id );
			$data['app_for_tor']	=	$this->applicant_model->app_for_tor( $this->user_id );
			$user_application_history	=	$this->applicant_model->getMyHistory( $this->user_id );
			$data['active']	 = 2;
			$data['content']	=	"applicant_history";
			$this->load->view("templates/applicantView_template",$data);
		}
		
		public function clearance(){
			$data['active']	 = 3;
			$data['content']	=	"clearance";
			$this->load->view("templates/applicantView_template",$data);
		}
	}
?>