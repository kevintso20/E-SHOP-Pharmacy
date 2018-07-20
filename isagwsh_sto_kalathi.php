<?php
$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");

	$id_xristi=$_POST["id_xristi"];
	$id_proiontos=$_POST["id_proiontos"];
	$posotita=$_POST["quantity"];
	$query="SELECT * FROM proionta WHERE id=$id_proiontos";
	$result = mysql_query($query) or die(dwada);
	$diathesimh_posothta = mysql_result($result,0,"diathesimi_posothta");
	if($posotita>$diathesimh_posothta){
		echo"Βάλε μικρότερη ποσότητα";
	} else{
		$query ="INSERT INTO cart VALUES('',$id_xristi,$id_proiontos,$posotita)";
		mysql_query($query) or die("insert error");
		header("location: cart.php");
	      }

?>