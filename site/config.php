<?php
class site_config {
	var $site_title = "Online Store";
	var $site_name = "Online Store";
	var $appdir = "/onlinestore/";
	var $site_slogo = "";
	var $site_header = "site/views/template/header.php";
	var $site_footer = "site/views/template/footer.php";
	var $site_404 = "site/views/template/404.php";
	var $site_router = "site/lib/router.php";
	var $site_tracker = "site/views/template/tracker.php";
	var $site_driver = array("couchdb"=>"site/lib/DB/couchdb");
	var $site_service_provider = "site/lib/soap/nusoap.php";
	var $site_controller = array(
	"index"=>"site/controller/index.php",
	"admin"=>"site/controller/admin.php"
	);
	var $site_views = array(
	"index"=>"site/views/index.php",
	"admin"=>"site/views/admin.php"
	);
	var $site_plugin = array("word"=>"public/pkg/jq/tinymce/my.php");
}
$site = new site_config();
?>
