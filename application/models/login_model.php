<?php
	Class Login_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function adminLogin(){
			$username	= $this->input->post('username');
			$password	= $this->input->post('passwds');
			
			$log	=	$this->db->select("id,username")
								 ->from('tbl_administrator')
								 ->where('username',$username)
								 ->where('password',$password)
								 ->limit(1)
								 ->get() ;	
			return $log->result();
		}
	}
?>