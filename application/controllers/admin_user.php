<?php
	Class Admin_user extends CI_Controller{
	
		private $table_name	=	"";
		private $return_to	=	"";
		
		public function __construct(){
			parent::__construct();
		}
		
		public function validate_user(){
		
			// $this->table		=	$this->input->post('tbl_name');
			
			if( isset($_POST['register_gradlibadmin']) ){
				$this->table_name	=	'tbl_gradlibadmin';
			}
			if( isset($_POST['register_accountant']) ){
				$this->table_name	=	'tbl_accounting';
			}
			if( isset($_POST['register_gsadmin']) ){
				$this->table_name	=	'tbl_gsadmin';
			}
			if( isset($_POST['register_osaadmin']) ){
				$this->table_name	=	'tbl_osa';
			}
			if( isset($_POST['register_registrar']) ){
				$this->table_name	=	'tbl_registrar';
			}
			if( isset($_POST['register_undergradlibadmin']) ){
				$this->table_name	=	'tbl_undergradlibadmin';
			}
			
			$this->return_to	=	isset($_GET['href'])?$_GET['href']:"administrator";
			
			$this->username		= 	$this->input->post('username');
			$this->password		= 	$this->input->post('password');
			$this->cpassword	= 	$this->input->post('cpassword');
			$this->fname		= 	$this->input->post('fname');
			$this->mname		= 	$this->input->post('mname');
			$this->lname		= 	$this->input->post('lname');
			
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('username','Username','required|min_length[2]|max_length[32]');
			$this->form_validation->set_rules('password','Password','required|matches[cpassword]|max_length[32]');
			$this->form_validation->set_rules('cpassword','Confirm Password','required|min_length[2]|max_length[32]');
			$this->form_validation->set_rules('fname','First Name','required|min_length[2]|max_length[32]');
			$this->form_validation->set_rules('mname','Middle Name','required|min_length[2]|max_length[32]');
			$this->form_validation->set_rules('lname','Last Name','required|min_length[2]|max_length[32]');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error">','</div>');
			
			if($this->form_validation->run() == false){
				echo validation_errors();
			}else{
				$datas	=	array(
					'username'	=>	$this->username,
					'password'  =>	md5(sha1($this->password)),
					'tbl_name'	=>	$this->table_name,
					'fname'		=>	$this->fname,
					'mname'		=>	$this->mname,
					'lname'		=>	$this->lname,
				);
				
				$this->load->model('user_model');
			
				$add_user_log	=	$this->user_model->add_user( $datas );
			}
			
		}
	}
?>