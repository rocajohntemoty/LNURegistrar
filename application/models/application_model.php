<?php
	Class Application_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function editpersonalinfo( $id = null ){
			
			$fname	=	$this->input->post('fname');
			$mname	=	$this->input->post('mname');
			$lname	=	$this->input->post('lname');
			$citizenship	=	$this->input->post('citizenship');
			$religion	=	$this->input->post('religion');
			$civilStatus	=	$this->input->post('civilStatus');
			$contact	=	$this->input->post('contact');
			$studentnumber	=	$this->input->post('studentnumber');
			$dob	=	$this->input->post('dob');
			$pob	=	$this->input->post('pob');
			$nameoffather	=	$this->input->post('nameoffather');
			$nameofmother	=	$this->input->post('nameofmother');
			$nameofspouse	=	$this->input->post('nameofspouse');
			$address	=	$this->input->post('address');
			
			$userData	=	array(
				'fname'	=> $fname,
				'mname'	=> $mname,
				'lname'	=> $lname,
				'citizenship'	=> $citizenship,
				'religion'	=> $religion,
				'civilStatus'	=> $civilStatus,
				'contact'	=> $contact,
				'studentnumber'	=> $studentnumber,
				'dob'	=> $dob,
				'pob'	=> $pob,
				'nameoffather'	=> $nameoffather,
				'nameofmother'	=> $nameofmother,
				'nameofspouse'	=> $nameofspouse,
				'address'	=> $address
			);
			$this->db->where('id',$id);
			$updateLog	= $this->db->update('tbl_applicant',$userData);
					 		
			
			return $updateLog;
		}
		public function getUserpass($id = null ){
			$userPass	=	$this->db->select('password')
										->from('tbl_applicant')
									 	->where('id',$id)
										->limit(1)
										->get();
			return $userPass->result();
		}
		public function editEducationalBackground( $id = null ){
			
			$nameOfElemSchool			=	$this->input->post('nameOfElemSchool');
			$dateOfElemGraduate		  =	$this->input->post('dateOfElemGraduate');			
			$nameOfSecSchool			 =	$this->input->post('nameOfSecSchool');
			$dateOfSecGraduate		   =	$this->input->post('dateOfSecGraduate');
			$nameOfUnderGradSchool	   =	$this->input->post('nameOfUnderGradSchool');
			$dateOfUnderGradGraduate	 =	$this->input->post('dateOfUnderGradGraduate');
			$nameOfGradSchool			=	$this->input->post('nameOfGradSchool');
			$dateOfGradGraduate		  =	$this->input->post('dateOfGradGraduate');
			
			$datas		  = array(
				'nameOfElemSchool'		=> $nameOfElemSchool,
				'dateOfElemGraduate'	  => $dateOfElemGraduate,
				'nameOfSecSchool'		 => $nameOfSecSchool,
				'dateOfSecGraduate'	   => $dateOfSecGraduate,
				'nameOfUnderGradSchool'   => $nameOfUnderGradSchool,
				'dateOfUnderGradGraduate' => $dateOfUnderGradGraduate,
				'nameOfGradSchool'		=> $nameOfGradSchool,
				'dateOfGradGraduate'	  => $dateOfGradGraduate
			);
			
			$this->db->where('id',$id);
			$editEdBGLog	=	$this->db->update('tbl_applicant',$datas);
			
			return $editEdBGLog;
		}
		public function applications( $id = null){
			$tor					    =	$this->input->post('tor');
			$employment			     =	$this->input->post('employment');
			$fstud				 	  =	$this->input->post('fstud');
			$otherReasonFoTORApp		=	$this->input->post('otherReasonFoTORApp');
			$applicationfortorreason	=	$this->input->post('applicationfortorreason');
			$certification			  =	$this->input->post('certification');
			$specifyCertification	   =	$this->input->post('specifyCertification');
			$goodMoral				  = 	$this->input->post('goodMoral');
			
			$date_of_application		=	date('Y-m-d');
			
			if(!empty($id)){
				if(!empty($certification) && !empty($specifyCertification)){
					
					$app_for_tor_certification	=	array(
						'user_id'		 => $id,
						'date_applied'	=> $date_of_application,
						'reason'		  => $specifyCertification,
						'status'	   => 0
					);
					
					$insert_certification	=	$this->db->insert('tbl_appforcertification',$app_for_tor_certification);
				}
				
				if(!empty($goodMoral)){
					
					$app_for_good_moral	=	array(
						'user_id'	=> $id,
						'date_applied' => $date_of_application,
						'status'	   => 0
					);
					$insert_good_moral	=	$this->db->insert('tbl_appforgm',$app_for_good_moral);
				}
				
				if(!empty($tor)){
					
					$app_for_tor	=	array();
					
					if(!empty($employment)){
						$app_for_tor[]	 = array(
							'user_id'	  => $id,
							'date_applied' => $date_of_application,
							'reason'	   => '1',
							'status'	   => 0
						);
					}
					if(!empty($fstud)){
						$app_for_tor[]	 = array(
							'user_id'	  => $id,
							'date_applied' => $date_of_application,
							'reason'	   => '2',
							'status'	   => 0
						);
					}
					if(!empty($otherReasonFoTORApp)){
						$app_for_tor[]	 = array(
							'user_id'	  => $id,
							'date_applied' => $date_of_application,
							'reason'	   => $applicationfortorreason,
							'status'	   => 0
						);
					}
					
					$insert_tor	 =	$this->db->insert_batch('tbl_appfortor',$app_for_tor);
				}
				
				return true;
			}else{
				exit("Error: Administrator Problem. ");
			}
			
			
		}
		public function check_user_app( $user_id = null ){ 
			$check_TOR_app_furtherStud	=	array(
				'get_user_app_GM' => $this->get_user_app_GM( $user_id ),
				'get_user_app_cert' => $this->get_user_app_cert( $user_id ),
				'check_user_tor_applied_furtherstud' => $this->check_user_tor_applied_furtherstud( $user_id ),
				'check_user_tor_applied_employment' => $this->check_user_tor_applied_employment( $user_id ),
				'check_user_tor_applied_otherReason' => $this->check_user_tor_applied_otherReason( $user_id ),
				'check_if_app_TOR_fstudies' => $this->check_if_app_TOR_fstudies( $user_id ),
			);
			return $check_TOR_app_furtherStud;
		}
		
		private function get_user_app_GM( $user_id = null ){
			$querLog	=	$this->db->select("count(id) as count")
									  ->from('tbl_appforgm')
									  ->where('status',"0")
									  ->where('user_id',$user_id)
									  ->get();
			return $querLog->result();
		}
		
		private function get_user_app_cert(  $user_id = null  ){
			$querLog	=	$this->db->select("count(id) as count")
									  ->from('tbl_appforcertification')
									  ->where('status',"0")
									  ->where('user_id',$user_id)
									  ->get();
			return $querLog->result();
		}
		
		private function check_user_tor_applied_furtherstud ( $user_id = null ){
			$querLog	=	$this->db->select("count(id) as count")
									  ->from('tbl_appfortor')
									  ->where('status',"1")
									  ->where('reason',"2")
									  ->where('user_id',$user_id)
									  ->get();
			return $querLog->result();
		}
		
		private function check_user_tor_applied_employment( $user_id = null ){
			$querLog	=	$this->db->select("count(id) as count")
									  ->from('tbl_appfortor')
									  ->where('status',"0")
									  ->where('reason',"1")
									  ->where('user_id',$user_id)
									  ->get();
			return $querLog->result();
		}
		private function check_user_tor_applied_otherReason ( $user_id = null ){
			$querLog	=	$this->db->select("count(id) as count")
									  ->from('tbl_appfortor')
									  ->where('status',"0")
									  ->where_not_in('reason',array("1","2"))
									  ->where('user_id',$user_id)
									  ->get();
			return $querLog->result();
		}
		private function check_if_app_TOR_fstudies( $user_id = null ){
			$querLog	=	$this->db->select("count(id) as count")
									  ->from('tbl_appfortor')
									  ->where('status',"0")
									  ->where('reason',"2")
									  ->where('user_id',$user_id)
									  ->get();
			return $querLog->result();
		}
	}
?>
