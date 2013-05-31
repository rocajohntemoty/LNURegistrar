<?php
	Class osa extends CI_Controller{
		
		public function __cosntruct(){
			parent::__construct();
		}
		
		public function index(){
			
			$data['content']	=	"osa/index";
			$this->load->view('templates/backend_template',$data);
		}
		public function login(){
			$data['content']	=	"osa/login";
			$this->load->view('backend_views/osa/login');
		}
	}
?>