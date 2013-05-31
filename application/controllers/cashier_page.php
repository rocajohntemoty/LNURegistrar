<?php
	Class Cashier_page extends CI_Controller{
		
		public function __cosntruct(){
			parent::__construct();
		}
		
		public function index(){
			
			$data['content']	=	"cashier/index";
			$this->load->view('templates/backend_template',$data);
		}
		public function login(){
			$data['content']	=	"cashier/login";
			$this->load->view('backend_views/osa/login');
		}
	}
?>