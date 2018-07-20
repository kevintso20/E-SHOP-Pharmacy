<?php
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
?>
