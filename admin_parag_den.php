<?php
echo"<meta charset='utf-8' />";
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	$query="select * from orders WHERE katastash=0" ;
	mysql_query("SET NAMES 'utf8'"); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	$users_all=mysql_query($query);
	
	echo "<html>
				<head>
				<meta charset='utf-8' />
					<title> TeicmCare.gr||Online Φαρμακείο</title>
					<meta charset='utf-8' />
						<link rel=\"shortcut icon\" href=\"cross_round-512.png\" type=\"image/x-icon\"/>
						<link rel='stylesheet' type='text/css' href='parag.css' />
				</head>
				<body>
				
					<a href='index.php'><img alt='' height='100' src='line2.jpg' width='720' /></a>
					<br/><br/>
					<h2 id='faceh2'>ΔΕΝ ΔΙΑΒΑΣΤΗΚΑΝ</h2><br/><br/>
					<div class='parag'>
					<h3>Βρέθηκαν $num παραγγελίες</h3>
					<table class=parag cellspacing=10>";
		
		while($user_row=mysql_fetch_array($users_all)) {
			$query="SELECT * FROM register WHERE id = ".$user_row["id_xrhsth"];
			$result=mysql_query($query);
			$num=mysql_numrows($result);
			$name = mysql_result($result, 0,"onoma");
			$surname = mysql_result($result, 0,"epitheto");
			$email = mysql_result($result, 0,"email");
			$polh = mysql_result($result, 0,"polh");
			$odos = mysql_result($result, 0,"odos");
			$thl = mysql_result($result, 0,"thlefono"); 
			echo"
				<tr>
				<td>
				<form action='apodensenai.php' method='POST'>
				<button  class='s' type='submit'value=".$user_row["katastash"].">Διαβάστηκε</button></td>
				<input type='hidden' value=".$user_row["id"]." name='id_proiontos'>
				</form>";
			$query2="select * from proionta  WHERE id=".$user_row["id_proiontos"];
			$result2=mysql_query($query2) or die (kwjsla);
			$pos=mysql_result($result2,0,"diathesimi_posothta");
			echo "
				</td>
				</tr>
				<tr>
				<th>ID χρήστη</th>
				<th>ΟΝΟΜΑ ΧΡΗΣΤΗ</th>
				<th>E-MAIL</th>
				<th>ΠΟΛΗ</th>
				<th>ΟΔΟΣ</th>
				<th>ΤΗΛΕΦΩΝΟ</th>
				<th>ID παραγγελίας</th>
				<th>ID προιόντος</th>
				<th>Ποσότητα</th>
				<th>Διαθέσιμη Ποσότητα</th>
				</tr>
				<tr class='grammes'>
				<td>".$user_row["id_xrhsth"]."</td>
				<td>".$name." ".$surname."</td>
				<td>".$email."</td>
				<td>".$polh."</td>
				<td>".$odos."</td>
				<td>".$thl."</td>
				<td>".$user_row["id"]."</td>
				 <form action='pr_kat2.php' method='post'>
				<td><button type=\"submit\" class='item' name = 'id'  value=".$user_row["id_proiontos"]." >".$user_row["id_proiontos"]."</button></td>
				<td>".$user_row["posothta"]."</td>
				<td>$pos</td>
				</tr>
			</form>";
		}		
			
		
		
	echo"
		</table>
	<a  style=text-decoration:none href='main_admin.php'><b>Eπιστροφή στην διαχείριση</b></a>
				</body>
				</html>";
?>