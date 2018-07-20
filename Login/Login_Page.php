<?php
	$host="localhost";
	$username="root";
	$password="";
	$database="3749_3768_3798_3846";

	$link=mysql_connect($host, $username, $password) or die("Cannot connect to host.");
	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
	mysql_select_db($database) or die("Cannot connect to database.");
	error_reporting(0);
	session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // E-mail και κωδικός που στάληθηκαν απο την φόρμα με την μέθοδο POST 
	  $username = mysql_real_escape_string($_POST['username']);
      $password = mysql_real_escape_string($_POST['password']); 
      
      $sql = "SELECT id FROM register WHERE username = '$username' and kodikos = '$password'";
      $result = mysql_query($sql);
      $count = mysql_num_rows($result);
      
	  
      // Εάν το E-mail και ο κωδικός ταιρίαζουν στην βάση τότε μας επιστρέφει 1 
	
      if($count == 1) {
		  if($username == "admin" && $password == "admin"){
			   $_SESSION['login_user'] = $username;
			  header("location: ../diaxirisi_admin.php");
		  }else{
		  
		  $_SESSION['login_user_id'] = mysql_result($result,0,"id");
         $_SESSION['login_user'] = $username;
		 header("location: ../index.php");
		  }
      }else {
         $error = "Λάθος username ή κωδικός";
		 echo "<html>
				   <head>
						<title>
							Είσοδος
							
						</title>
						<link href='LoginStyle.css' rel='stylesheet'>
					</head>
					<meta charset='utf-8' />
						<body>
							<div class='container'>
							$error
								<h2> Είσοδος <h2>
								<form action='Login_Page.php' method='post'>
								
									<label> User Name: </label> 
									<input id ='username' name = 'username' type='text' placeholder='    Username' value ='' >
								 
									<label> Κωδικός: </label> 
									<input class ='password' name = 'password' type='password' placeholder='    Κωδικός' value ='' >
									
									<input  class='submit' type='submit'  value='Είσοδος'>  
									<a href='../index.php'>Επιστροφή στην αρχικη</a>
								</form>
							</div>
						</body>
				</html>";
	  }
   }
?>