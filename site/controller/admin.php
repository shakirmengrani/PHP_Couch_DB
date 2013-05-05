<?php
include "site/modal/couch_modal.php";
class controller_admin{
 	private  $db;
	public function Auth ($argv = array()){
		$_session['user']  =$argv[0];
		$_session['pass']  =$argv[1];
		if($_session['user'] == "admin" && $_session['pass'] == "admin"){
			$_SESSION['log_auth'] = 1;
			return true;
		}
		else {
			return false;
		}
	}
	
	public function __call($name,$argvs){
		if($name == "ids_list" && count($argvs) == 0){
			$this->db = new couch_modal();
			return $this->db->ids_list(); 
		}
		elseif($name == "get_doc_info" && count($argvs) == 1){
			$this->db = new couch_modal();
			return $this->db->get_doc_info($argvs[0]);
		}
		if ($name == "Add_product" && count($argvs) == 5){
			$this->db = new couch_modal();
			return $this->db->Add_product($argvs[0],$argvs[1],$argvs[2],$argvs[3],$argvs[4]);
		}
		if ($name == "Edit_product"){
			
		}
		if ($name == "delete_product"){
			
		}
		
	}
}