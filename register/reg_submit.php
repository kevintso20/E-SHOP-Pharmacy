<?php
echo"<meta charset='utf-8' />";
$host="localhost";
$user="root";
$pass="";
$database="3749_3768_3798_3846";
mysql_connect($host,$user,$pass);

mysql_select_db($database)or die("unable to connect to database");
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
$query="select * from register";
$result=mysql_query($query);
$num=mysql_num_rows($result);
// mysql_close();
$onoma=$_POST["onoma"];
$epitheto=$_POST["epitheto"];
$password=$_POST["password"];
$password2=$_POST["password2"];
$email=$_POST["email"];
$polh=$_POST["polh"];
$odos=$_POST["odos"];
$tilefono=$_POST["tilefono"];
$username=$_POST["username"];

$i=0;
$found=false;

if($password != $password2) {
	echo "Oι Κωδικοι δεν ταιριαζουν<br/>";
} // an den yparxei problem me to password:
else if($username != "" && $onoma != "" && $epitheto != "" && $password != "" && $password2 != "" && $email != "" && $polh != "" && $odos != "" && $tilefono != ""){
	// kai exoun eisaxthei ola ta stoixeia:
	while($i< $num){
		$em=mysql_result($result,$i,"username");
		
		if($em == $email)
		{
			$found = true;
			break;		
		}	
		$i++;
	}
	if($found == true){
		echo"Ο χρηστης υπαρχει ηδη!!!";
	} // kai den yparxei hdh o xrhsths:
	else {
		mysql_query("INSERT INTO register(onoma,epitheto,kodikos,email,polh,odos,thlefono,username) VALUES ('".$onoma."', '".$epitheto."','".$password."','".$email."','".$polh."','".$odos."','".$tilefono."','".$username."')");
		header("location: ../index.php");
	} // kataxwrise ton sto base.
} else { // alliws vgale error page:
$error = "Συμπληρώστε όλα τα στοιχεία";
echo"
<html>
   <head>
		<title>
			Register
		</title>
		<link href=\"regstyle.css\" rel=\"stylesheet\">
		<meta charset='utf-8' />
	</head>
		<body>
			<div class='container'>
		    <h2> ΕΓΓΡΑΦΗ <h2>
		    <form action='reg_submit.php' method='post'>
             <label> User Name: </label> 
		      <input class ='name' name = 'username' type='text' placeholder='User Name' value ='' required>
			 			 
			 <label> Όνομα: </label> 
		      <input class ='name' name = 'onoma' type='text' placeholder='    Όνομα' value ='' required >
			  
		      <label> Επίθετο: </label> 
		      <input class='name' name = 'epitheto' type='text'placeholder='    Επίθετο' value ='' required >
		 
		      <label> Κωδικός: </label> 
		      <input class ='password' name = 'password' type='password' placeholder='    Κωδικός' value ='' required>
		 
			  <label> Επανελαβε Κωδικό: </label> 
		      <input class ='password' name = 'password2' type='password' placeholder='    Επανέλαβε Κωδικό' value ='' required>
			  
			  <label> E-mail: </label> 
		      <input id ='email' name = 'email' type='email' placeholder='    E-mail' value =''required>
			  
			  <label> Πόλη: </label> 
		      <input class ='city' name = 'polh' type='text' placeholder='    Πόλη' value =''  required>
			  
			  <label> Οδός: </label> 
		      <input class ='city' name = 'odos' type='text' placeholder='    Διεύθυνση' value ='' required>
			  
			  <label> Τηλέφωνο: </label> 
		      <input id='phone' name = 'tilefono' type='text' placeholder='    Τηλέφωνο' value ='' required>
		 
			<input  class='submit' type='submit'  value='Εγγραφή'> 
			</form>
</div>			
		</body>
</html>
";
}
?>