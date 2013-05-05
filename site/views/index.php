<?php
include $site->site_controller['index'];
$view = new controller_index(); 
?>
<div>
<ul class="thumbnails">
<?php foreach ($view->ids_list() as $id):?>
<li class="thumbnail">
<?php echo $id['ID'];?>
<br>
<a class="lightbox" href="<?php echo $id['Img'];?>"><img alt="" src="<?php echo $id['Img'];?>" width="100px" height="100px" ></a> 
<br>
<?php echo "<b>Price : </b>".$id['Price'];?>
<br>
<?php echo "<b>Type : </b>".$id['Type'];?>
</li>
<?php endforeach;?>
</ul>
</div>