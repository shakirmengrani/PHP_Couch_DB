<?php
include 'config.php';
include $site->site_database;
//$db->read_blog("entries","where ID=1 order by ID DESC");
header("content-type: text/xml");
echo '<?xml version="1.0"?>';
echo '<rss version="2.0">';
echo '<channel>';
echo '<title>My-blog Feeder</title>';
foreach ($db->read_blog("entries","order by ID DESC") as $item){
	echo '<item>';
	echo '<title>'.$item['title'].'</title>';
	echo '<subject>'.$item['title'].'</subject>';
	//echo '<description>'.$item['body'].'</description>';
	echo '<link>http://'.$_SERVER['SERVER_ADDR'].'/blog/?blog='.$item['ID'].'</link>';
	echo '<language>English</language>';
	echo '<author>Shakir</author>';
	echo '<copyright>2012</copyright>';
	echo '<webmaster>admin</webmaster>';
	echo '</item>';
}
echo '</channel>';
echo '</rss>';
?>