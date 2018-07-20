<?php
echo"<meta charset='utf-8' />";
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	$id_paraggelias=$_POST['id_paraggelias'];
	$id_proiontos=$_POST['id_proiontos'];
	$posothta=$_POST['posothta'];
	$query="SELECT * FROM proionta WHERE id=$id_proiontos";
	$result = mysql_query($query) or die(dwada);
	$diathesimh_posothta = mysql_result($result,0,"diathesimi_posothta");
	$diathesimh_posothta = $diathesimh_posothta - $posothta;
	$query="UPDATE proionta SET diathesimi_posothta=$diathesimh_posothta WHERE id = $id_proiontos";
	mysql_query($query) or die(dwadwa123);
	$query="UPDATE orders SET katastash=2 WHERE id=$id_paraggelias";
	mysql_query("SET NAMES 'utf8'"); 
	mysql_query($query);
	header("location: admin_parag _diabasthke.php");
	
?>