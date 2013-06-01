<?php
	Class Administrator_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function get_user( $tbl_name = null ){
			if( !empty ( $tbl_name ) ){
				return $this->db->select("username, fname,mname,lname, id")->from($tbl_name)->get()->result();
			}
		} 
	}
?>