<?php 
include $site->site_controller['admin']; 
$view = new controller_admin(); 
if ($_SESSION['log_auth'] == 0){
$view->Auth(array($_POST['txt_auth'][0],$_POST['txt_auth'][1]));	
}
?>
<?php  if($_SESSION['log_auth'] == 1): ?>

<div class="ui-toolbar" align="left">
<h3 align="center"><a href="#">Admin Dashboard</a></h3><br>
<a href="index.php?page=admin&mode=1" class="btn">Add New</a>
<table class="grid" align="left">
<thead>
<tr>
<th>Sno</th>
<th>Price</th>
<th>Type</th>
<!-- <th>Image</th>-->
<th>Action</th> 
</tr>
</thead>
<tbody>
<?php foreach ($view->ids_list() as $id):  ?>
<tr>
<td>
<?php echo $id['ID']?>
</td>
<td>
<?php echo $id['Price']?>
</td>
<td>
<?php echo $id['Type']?>
</td>
<!--<td>
  <img alt="" src="<?php echo $id['Img']?>" width="100px" height="100px">
</td> -->
<td>
<a href="index.php?page=admin&mode=2&ID=<?php echo $id['ID']; ?>">Edit</a> | <a href="index.php?page=admin&mode=3&ID=<?php echo $id['ID']; ?>">Delete</a>
</td>
</tr>
<?php endforeach;?>
</tbody>
</table>
</div>
</div>
<?php else:?>
<div class="adminpage">
<h3><a href="#">Login</a></h3>
<div>
<form method="post">
<table>
<tr>
<td>
Username : 
</td>
<td>
<input type="text" name="txt_auth[]" value="" />
</td>
</tr>
<tr>
<td>
Password : 
</td>
<td>
<input type="text" name="txt_auth[]" value="" />
</td>
</tr>
<tr>
<td colspan="2" align="right">
<input type="submit" value="login" class="btn" />
</td>
</tr>
</table>
</form>
</div>
</div>
<?php endif;?>
