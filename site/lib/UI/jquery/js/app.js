$(function(){
	$(".adminpage").accordion();
	$(".dlg").accordion();
	$(".lightbox").lightBox({
		fixedNavigation:true
	});
	$(".btn_edit").click(function(){
		var ID = $("#btn_edit").val(); 
		alert("Your press edit button? " + ID);
	});
	$(".btn_delete").click(function(){
		var ID = $("#btn_edit").val(); 
		alert("Your press edit button? " + ID);
	});
});
$(".grid").flexigrid({
	title: 'products',
	width: 700,
	height: 300
}); 