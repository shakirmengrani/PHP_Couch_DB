<?php
include "site/modal/couch_modal.php";
class controller_index {
	private $db;
	public function __construct(){
	$this->db = new couch_modal();
	}
	public function __call($name,$argvs){
		if($name == "ids_list" && count($argvs) == 0){
			$this->db = new couch_modal();
			return $this->db->ids_list(); 
		}
}
}
?>