<?php
	Class Accounting_page extends CI_Controller{
		
		public function __cosntruct(){
			parent::__construct();
		}
		
		public function index(){
			
			$data['content']	=	"accounting/index";
			$this->load->view('templates/backend_template',$data);
			
		}
		
		public function login(){
			$data['content']	=	"accounting/login";
			$this->load->view('backend_views/osa/login');
		}
		
	}
?>