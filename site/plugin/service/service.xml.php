<?php
// Pull in the NuSOAP code
require 'config.php';
//require $site->site_database;
require '../public/pkg/nusoap/lib/nusoap.php';

// Create the server instance
$server = new soap_server();
// Initialize WSDL support
$server->configureWSDL('Blog_service', 'urn:blog_service');
// Register the method to expose
$server->register('get_blog',                // method name
		array(),        // input parameters
		array('return' => 'tns:arr'),      // output parameters
		'urn:blog_service',                      // namespace
		'urn:blog_service#get_blog',                // soapaction
		'rpc',                                // style
		'encoded',                            // use
		'Read Data'            // documentation
);

$server->register('get_name',                // method name
		array('name'=>'xsd:string'),        // input parameters
		array('return' => 'xsd:string'),      // output parameters
		'urn:blog_service',                      // namespace
		'urn:blog_service#get_name',                // soapaction
		'rpc',                                // style
		'encoded',                            // use
		'Read Data'            // documentation
);

$server->wsdl->addComplexType(
		'arr',
		'complexType',
		'array',
		'sequence',
		'',
		array('title' => array('name' => 'title', 'type' => 'xsd:string'), 'body'=>array('name' => 'body', 'type'=>'xsd:string')
		)
);

function get_blog(){
	//$blog = $db->read_blog("entries","where ID=1 order by ID DESC");	
	//foreach ($blog as $data){
	//	$str[]=array($data['title'],$data['body']);
	//}
	$link = mysql_connect("mysql.0hosting.org","u499519731_blog","742547");
	mysql_select_db("u499519731_blog",$link);
	$res = mysql_query("select * from entries order by ID DESC",$link);
	while($row = mysql_fetch_array($res,1)){
		$str[] = array($row['title'],$row['body']);
	}
	return $str;
}

function get_name($name){
	return "Hello ".$name." !";
}

// Use the request to (try to) invoke the service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>