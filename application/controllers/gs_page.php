<?php
	Class Gs_page extends CI_Controller{
		
		public function __cosntruct(){
			parent::__construct();
		}
		
		public function index(){
			
			$data['content']	=	"graduateSC/index";
			$this->load->view('templates/backend_template',$data);
		}
		public function login(){
			$data['content']	=	"graduateSC/login";
			$this->load->view('backend_views/osa/login');
		}
	}
?>