<?php
	Class GradSchoolLib_page extends CI_Controller{
		
		public function __cosntruct(){
			parent::__construct();
		}
		
		public function index(){
			
			$data['content']	=	"college_library/index";
			$this->load->view('templates/backend_template',$data);
		}
		public function login(){
			$data['content']	=	"college_library/login";
			$this->load->view('backend_views/osa/login');
		}
	}
?>