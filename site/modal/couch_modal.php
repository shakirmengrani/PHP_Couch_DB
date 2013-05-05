<?php
include 'site/lib/DB/couchdb.php';
class couch_modal extends couch_driver{
	public function ids_list(){
		$list='';
		$total_rows = $this->client->getAllDocs()->total_rows;
		for($i=0;$i < $total_rows;$i++){
			$ID = $this->client->getAllDocs()->rows[$i]->id;
			$doc = couchDocument::getInstance($this->client,$ID);
			$Price = $doc->Description->Price;
			$Type = $doc->Description->Type;
			$Img='';
		if ( $doc->_attachments ) {
    		foreach ( $doc->_attachments as $name => $infos) {
    		  		$Img = $doc->getAttachmentURI($name); 
    		}
			}
			$list[] = array(
			"ID"=>$ID,
			"Price"=>$Price,
			"Type"=>$Type,
			"Img"=>$Img,
			"rows"=>$total_rows
			);
		}
		return $list;
		}
		public function Add_product($ID,$Price,$Type,$img,$img_type){
			try{
			$doc->_id = $ID;
			$doc->Description = array("Price"=>$Price,"Type"=>$Type);
			$this->client->storeDoc($doc);
			$doc = $this->client->getDoc($ID);
			$data =  "site/tmp/".$img;
			$filename = $img;
			$this->client->storeAttachment($doc, $data,$img_type,$img);
			return "Ok";	
			}
			catch (Exception $ex){
				return $ex;
			}
		}
	public function get_doc_info($ID){
		$list='';
			$doc = couchDocument::getInstance($this->client,$ID);
			$Price = $doc->Description->Price;
			$Type = $doc->Description->Type;
			$Img='';
		if ( $doc->_attachments ) {
    		foreach ( $doc->_attachments as $name => $infos) {
    		  		$Img = $doc->getAttachmentURI($name); 
    		}
			}
			$list[] = array(
			"ID"=>$ID,
			"Price"=>$Price,
			"Type"=>$Type,
			"Img"=>$Img
			);
			return $list;	
		}

}
?>