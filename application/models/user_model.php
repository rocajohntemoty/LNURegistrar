<?php
	Class User_model extends CI_Model{
	
		public function __construct(){
			parent::__construct();
		}
		
		public function add_user( $datas = null ){
			if( !empty( $datas ) ){
				$tbl_name	=	$datas['tbl_name'];
				unset($datas['tbl_name']);
				$queryLog	=	$this->db->insert( $tbl_name , $datas );
				return $queryLog;
			}else{
				return false;
			}
		}
	}
?>	