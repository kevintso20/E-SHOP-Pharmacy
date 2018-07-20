<?php

echo"<meta charset='utf-8' />";
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	mysql_query("SET NAMES 'utf8'"); 
	
	session_start();
	$query="select * from cart where id_xrhsth=".$_SESSION['login_user_id']."";
	
	$result=mysql_query($query);
	$num=mysql_numrows($result);

	$katastash=0;
	$i=0;
		while($i< $num){
		
		$id_xrhsth=mysql_result($result,$i,"id_xrhsth");
		$id_proiontos=mysql_result($result,$i,"id_proiontos");
		$posothta=mysql_result($result,$i,"posothta");
		mysql_query("INSERT INTO orders VALUES ('','$id_xrhsth','$id_proiontos','$posothta','$katastash')");
	
	$i++;	
		}
		$query="DELETE from cart where id_xrhsth=".$_SESSION['login_user_id']."";
	
		$result=mysql_query($query);

		echo"Η παραγγελια εγινε με επιτυχια<br/><br/>
		<a style=text-decoration:none href='index.php'><strong>Επιστροφή στην αρχική</strong></a>
		
		
		";


?>