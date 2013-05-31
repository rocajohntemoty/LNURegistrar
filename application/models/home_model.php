<?php
	Class Home_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		public function signin(){
			
			$username	= $this->input->post('username');	
			$password	= $this->input->post('password');	
			$fname	   = $this->input->post('fname');	
			$mname	   = $this->input->post('mname');	
			$lname	   = $this->input->post('lname');
			
			$datas	   =  array(
				'username' => $username,
				'password' => md5(sha1($password)),
				'fname'	=> $fname,
				'mname'	=> $mname,
				'lname'	=> $lname,
				'date_registered'	=> date('Y-m-d, H:i:s')
			);
			
			$insertApplicantLog	=	$this->db->insert('tbl_applicant',$datas);
			
			return $insertApplicantLog;
		}
		
		public function login(){
			
			$username	=	$this->input->post('username');
			$password	=	$this->input->post('password');
			
			$loginLog	=	$this->db->select('id,username')
										 ->from('tbl_applicant')
										 ->where('username',$username)
										 ->where('password',md5(sha1($password)))
										 ->limit(1)
										 ->get();
			return $loginLog->result();
		}
	}
?>