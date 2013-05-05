<?php
class router extends site_config{
	public function route($url){
		
		if($url == $this->appdir || $url == $this->appdir."index.php" || $url == $this->appdir."index.php/index"){
			return $this->site_views['index'];
		}
		elseif($url == $this->appdir."index.php/admin"){
			return $this->site_views['admin'];
		}
		else{
			return $this->site_404;
		}
	}
	
}

/*
if ($_SERVER['REQUEST_URI' ] == '/onlinestore/index.php/admin'){
	include  $site->site_views['admin'];
}
elseif($_SERVER['REQUEST_URI' ] == '/onlinestore/index.php/index' || $_SERVER['REQUEST_URI' ] == '/onlinestore/index.php' || $_SERVER['REQUEST_URI' ] == '/onlinestore/' ){
	include  $site->site_views['index'];
}
else{
	echo  "404 - Page not found";
}
*/
?>