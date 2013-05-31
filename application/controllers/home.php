<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{	
		$this->load->library('form_validation');
		$data['active']	 =	1;
		$data['content']	=	"home";
		$data['css']		=	array("home");
		$this->load->view('templates/home_template',$data);
	}
	
	public function signin(){
		
		$this->load->library('form_validation');
		if(isset($_POST['register'])){
			
			$this->form_validation->set_rules('username','Username','required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'required|matches[cpassword]');
			$this->form_validation->set_rules('cpassword', 'Confirmation', 'required');
			$this->form_validation->set_rules('fname','First Name','required|xss_clean');
			$this->form_validation->set_rules('mname','Middle Name','required|xss_clean');
			$this->form_validation->set_rules('lname','Last Name','required|xss_clean');
			$this->form_validation->set_rules('security','Security','callback_check_mySecurity');
			
			if($this->form_validation->run() == false ){
				
				$data['active']	 =	2;
				$data['content']	=	"signin";
				$this->load->view('templates/home_template',$data);	
				
			}else{
				$this->load->model('home_model');
				$log	=	$this->home_model->signin();
				
				if($log){
					// -- Load Success Page;
					//redirect('home');
					echo "Success Registration. <h1> registration success page here! </h1>";
				}else{
					redirect('home');
				}
			}
			
		}else{
			$data['active']	 =	2;
			$data['content']	=	"signin";
			$this->load->view('templates/home_template',$data);
		}
	}
	public function contactus(){
		$data['active']	 =	3;
		$data['content']	=	"contactus";
		$this->load->view('templates/home_template',$data);
	}
	
	public function check_mySecurity( $word = null ){
		
		$this->load->library("session");
		$this->load->library('form_validation');
		$security	=	$this->session->userdata('image');
		if($security != $word ){
			$this->form_validation->set_message('check_mySecurity','The %s did not match security.');
			return false;
		}else{
			return true;
		}
	}
	public function securityImage(){
		
		$this->load->library('session');
		$sess		=	substr(md5(rand(999,9999)),5,5);
		$this->session->set_userdata('image',$sess);
		$sessImage	=	$this->session->userdata('image');
	
	    $image = imagecreate(170, 30); //create blank image (width, height)
	    $bgcolor = imagecolorallocate($image, 255, 255, 255); //add background color with RGB.
	    $textcolor = imagecolorallocate($image, 255, 100, 255); //add text/code color with RGB.
	
	
	    imagestring($image, 20, 60, 3, $sessImage, $textcolor); //create image with all the settings above.
	    header ("Content-type: image/png"); // define image type
	    imagepng($image); //display image as PNG
	}
	public function login(){
		
		$this->load->library('session');
		$this->load->library('form_validation');
		
		if(isset($_POST['login'])){
			
			$this->form_validation->set_rules('username','Username','required|xss_clean');
			$this->form_validation->set_rules('password','Password','required|xss_clean');
			$this->form_validation->set_error_delimiters('<div class="alert alert-error">','</div>');
				
			if($this->form_validation->run()	==	false){
				$data['active']	 =	1;
				$data['content']	=	"home";
				$data['css']		=	array("home");
				$this->load->view('templates/home_template',$data);
			}else{
				$this->load->model('home_model');
				$this->load->library('encrypt');
				$loginLog	=	$this->home_model->login();
				
				if(!empty($loginLog)){
					
					$userDatas	=	array(
						'userDataId'	=> $this->encrypt->encode($loginLog[0]->id),
						'userDataName' =>  $this->encrypt->encode($loginLog[0]->username)
					);
					
					$this->session->set_userdata($userDatas);
					
					redirect('applicant');
				}else{
					$data['active']	 =	1;
					$data['error']	  =    1;
					$data['content']	=	"home";
					$data['css']		=	array("home");
					$this->load->view('templates/home_template',$data);
				}
			}
		}else{
			redirect('home');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */