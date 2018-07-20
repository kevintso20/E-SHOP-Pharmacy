<?php

echo"<meta charset='utf-8' />";
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	$query="select * from cart" ;
	mysql_query("SET NAMES 'utf8'"); 
	$result2=mysql_query($query);
	$num=mysql_numrows($result2);
	$users_all=mysql_query($query);
	

echo "<html>

<head>
				<meta charset='utf-8' />
					<title>||Online Φαρμακείο</title>
						<link rel=\"shortcut icon\" href=\"cross_round-512.png\" type=\"image/x-icon\"/>
						<link rel='stylesheet' type='text/css' href='facestylee.css' />
						<link rel='stylesheet' type='text/css' href='proionstyle2.css' />
							<link rel='stylesheet' type='text/css' href='parag.css' />
				</head>
	
<body>
				<div class='start'>
					<h3 id='welcome'> ΚΑΛΩΣ ΗΡΘΑΤΕ ΣΤΟ Online Φαρμακείο<br/> ΔΩΡΕΑΝ ΑΠΟΣΤΟΛΗ ΑΝΩ ΤΩΝ 40 ΕΥΡΩ </h3><br/>
					<h2> ΤΗΛ.ΠΑΡΑΓΓΕΛΙΩΝ 23210 12345</h2>
					<form method='post' action='search_submit2.php'>
					<input id='search'type='text' name='search' placeholder='Αναζήτηση προιόντων...' />
					<input class='button anaz' type='submit' value=\"Αναζήτηση\">
					</form> <br/><br/>
	<h2 id='faceh2'>ΚΑΛΑΘΙ</h2><br/><br/>
	<div class='parag'>
	<h3>Βρέθηκαν $num αντικείμενα στο καλάθι</h3>
	
	<table class=parag cellspacing=10>";
	
	$i=0;
	
	while($proion_row=mysql_fetch_array($users_all)) {
			$query="SELECT * FROM proionta WHERE id = ".$proion_row["id_proiontos"];
			$result=mysql_query($query);
			$name = mysql_result($result, 0,"onoma");
			$timh = mysql_result($result, 0,"timh");
			 
			$id2 = mysql_result($result2, $i,"id");
				$i++;
				 
				echo"
				</td>
				</tr>
				<tr>
				<th>ID ΠΡΟΙΟΝΤΟΣ</th>
				<th>ΟΝΟΜΑ ΠΡΟΙΟΝΤΟΣ</th>
				<th>ΤΙΜΗ</th>
				<th>ΠΟΣΟΤΗΤΑ</th>
				<th></th>
				</tr>
				<tr class='grammes'>
				<td>".$proion_row["id_proiontos"]."</td>
				<td>".$name."</td>
				<td>".$timh.'€'."</td>
				<td>".$proion_row["posothta"]."</td>
				<form method='POST' action='afairesi.php'>
				<input   name='id' type='hidden' value ='$id2'>
				<td><button  class='s' type='submit'> Αφαίρεση</button></td></tr>
				</form>";
				
		}
		
	
	echo"
		</table>
		<form method='post' action='apothikefsi_sto_orders.php'>
		<div class='ol'>
		<tr>
		<th><button  class='s' type='submit'> Ολοκληρώθηκε</button></th>
		</div></form>		
		<th><a href='index.php'><button  class='s' type='submit'>Επιστροφή στην αρχική</button></a></th>
		</tr>
		</div>						
		
		</body>
	</html>";
?>	