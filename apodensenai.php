<?php
echo"<meta charset='utf-8' />";
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	$id_proiontos=$_POST['id_proiontos'];
	$query="UPDATE orders SET katastash=1 WHERE id=$id_proiontos";
	mysql_query("SET NAMES 'utf8'"); 
	mysql_query($query);
	 header("location: admin_parag_den.php");
?>
	