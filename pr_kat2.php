<?php
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	$onoma=$_POST["id"];
	$query="select * from proionta where id=".$onoma;
	mysql_query("SET NAMES 'utf8'"); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	$users_all=mysql_query($query);
	$users_row=mysql_fetch_array($users_all);

	session_start();

echo "<html>
				<head>
				<meta charset='utf-8' />
					<title>||Online Φαρμακείο</title>
						<link rel=\"shortcut icon\" href=\"cross_round-512.png\" type=\"image/x-icon\"/>
						<link rel='stylesheet' type='text/css' href='pr_kat.css' />
						<link rel='stylesheet' type='text/css' href='css/proionstyle2.css' />
				</head>
				<body>
				<br/><br/>";
	echo"
	<div style='width:700px'>
	<table class='left'>
		<td>
			<tr>
				<td><img class='image'src=".$users_row["eikona"]."></td>
				<td id='text'><b>".$users_row["onoma"]."</b><br/><br/>
				<del class='firstprice'>€".$users_row["timh"]."</del>
				<strong class='finalprice'>€".$users_row["telikhtimh"]."</strong><br/>";
				if($users_row["diathesimi_posothta"]==0){
					echo" <strong class='NoAvailable'>Μη διαθέσιμο</strong><br/>";
				}
				else{
					echo"<strong class='Available'>Άμεσα διαθέσιμο</strong><br/><br/>";
				}								
if(isset($_SESSION['login_user_id'])){
	echo"<form action='isagwsh_sto_kalathi.php' method='post'>
			Ποσότητα:
			<input class='posotita' type='number' name='quantity' min='1' max='5' required>
			<input type = 'hidden' name = 'id_xristi' value = '".$_SESSION['login_user_id']."'>
			<input type = 'hidden' name = 'id_proiontos' value = '$onoma'>
			<input class='button' type='submit' value ='ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ'>
		</form>";
}
echo "			</td>
			</tr></table>
			
			
			<table>
  <tr><div class='perigrafi'>
    <p>ΠΕΡΙΓΡΑΦΗ ΠΡΟΙΟΝΤΟΣ</p>
	  </div>
    <td class='perigrafi2'>
	".$users_row["plhrofories"]."
	</td>
  </tr>
</table>
</div>
</div>
</html>";




?>		