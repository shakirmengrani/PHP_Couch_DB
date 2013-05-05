<?php
require_once "couch/lib/couch.php";
require_once "couch/lib/couchClient.php";
require_once "couch/lib/couchDocument.php"; 
class couch_driver {
		protected $client;
		protected $server = "http://mengrani.iriscouch.com/";
		protected $dbname = "online";
	public function __construct(){
		$this->client = new couchClient($this->server, $this->dbname);
	}
}
?>