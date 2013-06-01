<?php
	Class Administrator extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('administrator_model');
		}
		
		public function index(){
			
			$data['content']	=	"index";
			$this->load->view('templates/admin_template',$data);
			
		}
		public function login(){
			
			$this->load->library('form_validation');
			
			if(isset($_POST['adminlogin'])){
			
				$this->form_validation->set_rules('username','Username','required|xss_clean');
				$this->form_validation->set_rules('passwd','Password','required|xss_clean');
			    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
				
				if ($this->form_validation->run() == FALSE){
					
					$data['content']	=	"administrator/login";
					$this->load->view('backend_views/administrator/login');
					
				}else{
					
					$this->load->library('encrypt');
					$this->load->library('session');
					$this->load->model('login_model');
					$log	=	$this->login_model->adminlogin();
					
					
					if(!empty($log)){
						
						$userdata	=	array(
							'adminLoginID'	=>	$this->encrypt->encode($log[0]->id),
							'adminUsername'	=>	$this->encrypt->encode($log[0]->username)
						);
						
						$this->session->set_userdata($userdata);
						
						$id			=	$this->session->userdata('adminLoginID');
						$username	  =	$this->session->userdata('adminUsername');
						
						if(!empty($id) && !empty($username)){
							redirect('administrator/index');
						}
					}else{
						$data['error']	= "<div class='alert alert-danger'>Username or Password not Match!</div>";
						$data['content']	=	"administrator/login";
						$this->load->view('backend_views/administrator/login',$data);
					}
				}
				
			}else{
				$data['content']	=	"administrator/login";
				$this->load->view('backend_views/administrator/login');
			}
		}
		public function notification(){
			$data['content']	=	"index";
			$this->load->view('templates/admin_template',$data);
		}
		public function applicantmanager(){
			$data['content']	=	"applicants";
			$this->load->view('templates/admin_template',$data);
		}
		public function documentapplicationmanager(){
			$data['content']	=	"index";
			$this->load->view('templates/admin_template',$data);
		}
		public function accountingmanager( $view = null ){
			switch(strtolower($view)){
				case "add-new-accounting-administrator":
					$data['content']	=	"accounting_add_view";
					$this->load->view('templates/admin_template',$data);
					break;
				default:
					$data['users']		=	$this->get_users( 'tbl_accounting' );
					$data['content']	=	"accounting_view";
					$this->load->view('templates/admin_template',$data);
					break;
			}
		}
		public function libadministratormanager($view = null ){
			switch(strtolower($view)){
				case "add-new-graduate-library-administrator":
					$data['content']	=	"gradlibraryAdmin_add_view";
					$this->load->view('templates/admin_template',$data);
					break;
				case "add-new-undergraduate-library-administrator":
					
					$data['content']	=	"undergradlibraryAdmin_add_view";
					$this->load->view('templates/admin_template',$data);
					break;
				default:
					$data['cla']		=	$this->get_users( 'tbl_gradlibadmin' );
					$data['ugl']		=	$this->get_users( 'tbl_undergradlibadmin' );
					$data['content']	=	"libraryAdmin_view";
					$this->load->view('templates/admin_template',$data);
					break;
			}
		}
		public function registrarmanager($view = null ){
			switch(strtolower($view)){
				case "add-new-registrar-administrator":
					$data['content']	=	"registrar_add_view";
					$this->load->view('templates/admin_template',$data);
					break;
				default:
					$data['users']		=	$this->get_users( 'tbl_registrar' );
					$data['content']	=	"registrar_view";
					$this->load->view('templates/admin_template',$data);
					break;
			}
		}
		public function osamanager( $view = null ){
			switch(strtolower($view)){
				case "add-new-osa-administrator":
					$data['content']	=	"osa_add_view";
					$this->load->view('templates/admin_template',$data);
					break;
				default:
					$data['users']		=	$this->get_users( 'tbl_osa' );
					$data['content']	=	"OSA_view";
			$this->load->view('templates/admin_template',$data);
					break;
			}
		}
		public function graduateschoolmanager( $view = null ){
			
			switch(strtolower($view)){
				case "add-new-graduates-school-administrator":
					$data['content']	=	"GS_add_view";
					$this->load->view('templates/admin_template',$data);
					break;
				default:
					$data['users']		=	$this->get_users( 'tbl_gsadmin' );
					$data['content']	=	"GS_view";
					$this->load->view('templates/admin_template',$data);
					break;
			}
		}
		private function get_users( $tbl_name = null ){
			if(!empty( $tbl_name )){
				
				$users	=	$this->administrator_model->get_user( $tbl_name );
				return $users;
			}
		}
	}
?>