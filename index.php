<?php 
//ini_set("error_reporting","E_ERROR | E_STRICT | E_COMPILE_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING");
session_start();
require 'site/config.php';
?>
<html>
<head>
<title><?php echo $site->site_title;?></title>
<!-- <link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">"
<link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">" -->
<?php 
include $site->site_header;
?>
</head>
<body>
<div class="page" align="center"> 
<?php 
if($_GET['page'] == "index" || $_GET['page'] == ""){
include $site->site_views['index'];	
}
elseif($_GET['page'] == "admin"){
	include $site->site_views['admin'];
}
elseif($_GET['page'] == "griddata"){
	include 'site/modal/grid_modal.php';
}
else{
	include $site->site_404;
}
?>
</div>
<?php include $site->site_footer;?>
</body>
</html>
