<?php
	Class UnderGradLib_page extends CI_Controller{
		
		public function __cosntruct(){
			parent::__construct();
		}
		
		public function index(){
			
			$data['content']	=	"undergraduate_library/index";
			$this->load->view('templates/backend_template',$data);
		}
		public function login(){
			$data['content']	=	"undergraduate_library/login";
			$this->load->view('backend_views/osa/login');
		}
	}
?>