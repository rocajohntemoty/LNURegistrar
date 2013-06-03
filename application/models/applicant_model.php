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
		public function getMyHistory( $user_id = null ){
			return false;
		}
		public function app_for_diploma( $user_id	=	null ){
			$queryLog	=	$this->db->select("date_applied,date_confirmed,status,fname,mname,lname")->from('tbl_appforgm')
									 ->join('tbl_applicant','tbl_applicant.id = tbl_appforgm.user_id')
									 ->where('tbl_applicant.id',$user_id)->get();
									 
			return $queryLog->result();
		}
		public function app_for_tor( $user_id	=	null ){
			$queryLog	=	$this->db->select("reason,date_applied,date_confirmed,status,fname,mname,lname")->from('tbl_appfortor')
									 ->join('tbl_applicant','tbl_applicant.id = tbl_appfortor.user_id')
									 ->where('tbl_applicant.id',$user_id)->get();
									 
			return $queryLog->result();
		}
		public function app_for_certification( $user_id	=	null ){
			$queryLog	=	$this->db->select("reason,date_applied,date_confirmed,status,fname,mname,lname")->from('tbl_appforcertification')
									 ->join('tbl_applicant','tbl_applicant.id = tbl_appforcertification.user_id')
									 ->where('tbl_applicant.id',$user_id)->get();
									 
			return $queryLog->result();
		}
		
	}
?>