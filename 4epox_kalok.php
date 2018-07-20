<?php
	$host="localhost";
	$user="root";
	$password="";
	$database="3749_3768_3798_3846";
	mysql_connect($host,$user,$password);
	mysql_select_db($database) or die("Unable to select database");
	$query="select * from proionta,kathgories where proionta.id=kathgories.id_proiontos AND onoma_kathgorias='4 ΕΠΟΧΕΣ' AND onoma_upokathgorias='ΚΑΛΟΚΑΙΡΙ'";
	
	mysql_query("SET NAMES 'utf8'"); 
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	$i=0;
	$c=0;
	if(isset($_GET["limit"])) $query.=" LIMIT ".$_GET["limit"];
	$users_all=mysql_query($query);
	session_start();
	
	echo "<html>
				<head>
				<meta charset='utf-8' />
					<title>||Online Φαρμακείο</title>
						<link rel=\"shortcut icon\" href=\"cross_round-512.png\" type=\"image/x-icon\"/>
						<link rel='stylesheet' type='text/css' href='facestylee.css' />
						<link rel='stylesheet' type='text/css' href='proionstyle2.css' />
				</head>
				<body>
				<div class='start'>
					<h3 id='welcome'> ΚΑΛΩΣ ΗΡΘΑΤΕ ΣΤΟ Online Φαρμακείο<br/> ΔΩΡΕΑΝ ΑΠΟΣΤΟΛΗ ΑΝΩ ΤΩΝ 40 ΕΥΡΩ </h3><br/>
					<h2> ΤΗΛ.ΠΑΡΑΓΓΕΛΙΩΝ 23210 12345</h2>
					<form method='post' action='search_submit2.php'>
					<input id='search'type='text' name='search' placeholder='Αναζήτηση προιόντων...' />
					<input class='button anaz' type='submit' value=\"Αναζήτηση\">
					</form>";
					if(isset($_SESSION['login_user']))
					{
					echo"<ul class=\"ul\">
					<li class=\"li\" style=float:right; ><a>".$_SESSION['login_user']."</a>
						<ul  class=\"ul\">
							<li class=\"li\"><a href='cart.php'>Το Καλάθι μου</a></li>
							<li class=\"li\"><a href='log_out.php'>Αποσύνδεση</a></li>
						</ul></ul>";
					
					}
					else {
						echo"
					
					<a href='register/register_page.php'><input  class='button egg' type='button' value=\"Εγγραφή\"></a>
					<a href='Login/user_login.html'><input class='button egg' type='button' value=\"Σύνδεση\"> </a>";
					}
					echo"
					<br/>
					<br/><br/><br/><br/><br/><br/><br/>
					<ul class=\"ul\">
					<li class=\"li\"><a href='gunaika.php'>ΓΥΝΑΙΚΑ</a>
						<ul  class=\"ul\">
							<li class=\"li\"><a href='prosopo.php'>Πρόσωπο</a></li>
							<li class=\"li\"><a href='gunaika_soma.php'>Σώμα</a></li>
							<li class=\"li\"><a href='gunaika_mallia.php'>Μαλλιά</a></li>
							<li class=\"li\"><a href='gunaika_makigiaz.php'>Μακιγιάζ</a>
						</ul>
					<li class=\"li\"><a href='mp.php'>ΜΗΤΕΡΑ & ΠΑΙΔΙ</a>
						<ul  class=\"ul\">
							<li class=\"li\"><a href='mp_egimosini.php'>Εγκυμοσύνη</a></li>
							<li class=\"li\"><a href='mp_thilasmos.php'>Θηλασμός</a></li>
							<li class=\"li\"><a href='mp_aksesouar.php'>Αξεσουάρ για μωρά</a></li>
							<li class=\"li\"><a href='mp_frodida.php'>Φροντίδα μωρού</a></li>
						</ul>
					<li class=\"li\"><a href='adras.php'>ΑΝΔΡΑΣ</a>
						<ul  class=\"ul\">
							<li class=\"li\"><a href='adr_prosopo.php'>Πρόσωπο</a></li>
							<li class=\"li\"><a href='adras_soma.php'>Σώμα</a></li>
							<li class=\"li\"><a href='ksirisma.php'>Ξύρισμα</a></li>
							<li class=\"li\"><a href='podia.php'>Πόδια</a></li>
						</ul>
					<li class=\"li\"><a href='farmakeio.php'>ΦΑΡΜΑΚΕΙΟ</a>
						<ul  class=\"ul\">
							<li class=\"li\"><a href='farm_stoma.php'>Στοματική Υγιεινή</a></li>
							<li class=\"li\"><a href='farm_omoiopath.php'>Ομοιοπαθητικά</a></li>
							<li class=\"li\"><a href='farm_ugeia_ka.php'>Υγεία κάτω άκρων</a></li>
							<li class=\"li\"><a href='farm_diag_s.php'>Διαγνωστικές<br/> συσκευές</a></li>
						</ul>
						<li class=\"li\"><a href='epoxes.php'>4 ΕΠΟΧΕΣ</a>
						<ul  class=\"ul\">
							<li class=\"li\"><a href='4epox_kalok.php'>Καλοκαίρι</a></li>
							<li class=\"li\"><a href='4epox_fthinoporo.php'>Φθινόπωρο</a></li>
							<li class=\"li\"><a href='4epox_xeim.php'>Χειμώνας</a></li>
							<li class=\"li\"><a href='4epox_anoiksh.php'>Άνοιξη</a></li>
						</ul>
					</ul>
					<a href='index.php'><img alt='' height='100' src='line2.jpg' width='720' /></a>
					<br/><br/>
					 <form action='pr_kat.php' method='post'>
					<h2 id='faceh2'>ΚΑΛΟΚΑΙΡΙ</h2><br/><br/>
					</div>
					<p>Βρέθηκαν $num προιόντα</p>
					Εμφάνιση: <a href='farm_ugeia_ka.php?limit=3'>3</a> <a href='farm_ugeia_ka.php?limit=6'>6</a> <a href='farm_ugeia_ka.php'>All</a>
					<table cellspacing=10>";

	while($users_row=mysql_fetch_array($users_all)) {
		if($c == 3){
			echo "<tr>";
			$c=0;
		}
		echo"			
						<td class=\"proion\" valign='bottom' >
							<img class='image'src=".$users_row["eikona"].">
						<div class='dimens'>
							<b>".$users_row["onoma"]."</b><br/>
							<id='text'>".$users_row["plhrofories"]."</div>
						<div class='dimenss'>
							<del class='firstprice'>€".$users_row["timh"]."</del>
							<strong class='finalprice'>€".$users_row["telikhtimh"]."</strong><br/>";
						if($users_row["diathesimi_posothta"]==0){
						echo" <strong class='NoAvailable'>Μη διαθέσιμο</strong><br/>";
						}
						else{
							echo"<strong class='Available'>Άμεσα διαθέσιμο</strong><br/>";
						}
						echo"<button  class='button' type=\"submit\" name = 'id'  value=".$users_row["id"]." >ΠΕΡΙΣΣΟΤΕΡΑ</button></div>
						</td>";

		
		$c++;
	}
	echo "	</table>
			</form>
			<div class='Information'>
	<div id='leftnav'>
	<h3>Πληροφορίες</h3>
	<ul>
	<li  class='terms'><a href='oroi_xrhshs.php'>Όροι Χρήσης</li> 
	<li  class='terms'><a href='tr_apostolis.php'>Τρόποι Αποστολής</li>
	<li  class='terms'><a href='tr_plhrwmhs.php'>Τρόποι Πληρωμής</li>
	<li  class='terms'><a href='poioi_eimaste.php'>Ποιοι Είμαστε</li>
	</ul>
	</div>
	<div id='rightnav'>
	<h3 style='color:black'>Κατηγορίες</h3>
	<ul>
	<li  class='cat'><a href='gunaika.php'>Γυναίκα</li>
	<li  class='cat'><a href='mp.php'>Μητέρα & Παιδί</li>
	<li  class='cat'><a href='adras.php'>Άνδρας</li> 
	<li  class='cat'><a href='farmakeio.php'>Φαρμακείο</li>
	<li  class='cat'><a href='epoxes.php'>4 εποχές</li>
	</ul>
	</div>
	<br/>
	<div  class='center'> 
		<h2>Επικοινωνία</h2>
		<p><br/>Τηλέφωνο:<strong>23210 49341</strong><br/><br/>
		Διεύθυνση:<strong>Τέρμα Μαγνησίας,Σέρρες</strong></p></div>
<div id='footer'> Copyright © 2017 Φαρμακείο </div>
	</div>
				</body>
				</html>";
?>