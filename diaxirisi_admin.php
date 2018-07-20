<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$pass);
	mysql_select_db($database) or die("Unable to select database");
	$c=0;
	$query="select * from proionta";
	mysql_query("SET NAMES 'utf8'"); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	$query="SELECT * FROM proionta ORDER BY RAND() LIMIT 9";
	session_start();
	echo "<html>
	
				<head>
				<meta charset='utf-8' />
					<title> Online Φαρμακείο</title>
						<link rel=\"shortcut icon\" href=\"cross_round-512.png\" type=\"image/x-icon\"/>
						<link rel='stylesheet' type='text/css' href='facestylee.css' />
						<link rel='stylesheet' type='text/css' href='proionstyle2.css' />
				</head>
				<body>";
			
					
					if(isset($_SESSION['login_user']))
					{
					echo"<ul class=\"ul\">
					<li class=\"li\" style=float:right; ><a>".$_SESSION['login_user']."</a>
						<ul  class=\"ul\">
							<li class=\"li\"><a href='log_out.php'>Αποσύνδεση</a></li>
						</ul></ul>";
					
					}
					else {
						echo"
					
					<a href='register/register_page.php'><input  class='button egg' type='button' value=\"Εγγραφή\"></a>
					<a href='Login/user_login.html'><input class='button egg' type='button' value=\"Σύνδεση\"> </a>";
					}
					echo"<a href='main_admin.php'><input class='button' type='button' value=\"Διαχείριση\"></a>

				</body>
				</html>
				";

?>