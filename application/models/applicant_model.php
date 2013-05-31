<?php
	Class Applicant_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function getUser( $id = null ){
			$user	=	$this->db->select('*')
							 ->from('tbl_applicant')
							 ->where('id',(int) $id)
							 ->limit(1)
							 ->get();
			return $user->result();
		}
	}
?>