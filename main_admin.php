<?php

echo"<meta charset='utf-8' />";
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	mysql_query("SET NAMES 'utf8'"); 


echo"
<head>
<link rel='stylesheet' type='text/css' href='facestylee.css' />
</head>
<body>
<br/><br/>
<a href='KataxorisiProiontos.php'><input  class='button kal' type='button' value=\"Καταχώρηση Προιόντος\"></a>
<a href='admin_parag_den.php'><input  class='button kal' type='button' value=\"Δεν διαβάστηκε\"></a>
<a href='admin_parag _diabasthke.php'><input  class='button kal' type='button' value=\"Διαβάστηκε\"></a>
<a href='admin_parag_olokl.php'><input  class='button kal' type='button' value=\"Ολοκληρώθηκε\"></a><br/>
<a style=text-decoration:none href='diaxirisi_admin.php'><b>Επιστροφή στην αρχικη</b></a>
</body>";

?>