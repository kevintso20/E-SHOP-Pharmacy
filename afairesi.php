<?php

echo"<meta charset='utf-8' />";
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	mysql_query("SET NAMES 'utf8'"); 
	
		$id=$_POST["id"];
	
	$query="delete from cart where id=$id";
	mysql_query($query);
	
		 header("location: cart.php");
	
	
	
	
	
	
	
?>	