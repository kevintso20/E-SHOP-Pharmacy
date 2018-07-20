<?php
session_start();
echo"<html>
				<head>
				<meta charset='utf-8' />
					<title>||Online Φαρμακείο</title>
						<link rel=\"shortcut icon\" href=\"cross_round-512.png\" type=\"image/x-icon\"/>
						<link rel='stylesheet' type='text/css' href='footer.css' />
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
					</br><br/><br/>
					<br/><br/><br/><br/><br/>
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
					<a href='index.php'><img alt='' height='150' src='banner.jpg' width='720' /></a>
					<br/><br/>
						<nav>
						<ul>
							<li><a class='term' href='poioi_eimaste.php'>Ποιοι Είμαστε</a></li>
							<li><a class='term' href='oroi_xrhshs.php'>Όροι Χρήσης</a></li>
							<li><a class='term' href='tr_apostolis.php'>Τρόποι Αποστολής</a></li>
							<li><a class='term' href='tr_plhrwmhs.php'>Τρόποι Πληρωμης</a></li>
						</ul>
						</nav>
						
					<article>
						<h2 id='faceh2'>ΤΡΟΠΟΙ ΑΠΟΣΤΟΛΗΣ</h2><br/><br/>
					
						<div class='terms1'>
						Τα προϊόντα που φέρουν την ένδειξη «διαθέσιμο»<strong> αποστέλλονται τις επόμενες 1-2 εργάσιμες ημέρες</strong> από την ημέρα 
							της παραγγελίας (εφόσον η παραγγελία έχει γίνει μέχρι τις 17:00 το απόγευμα) με της μεταφορική μας εταιρεία στο σπίτι 
							σας. <strong>Αν κάποιο προϊόν δεν είναι διαθέσιμο θα επικοινωνήσουμε μαζί σας για να σας ενημερώσουμε σχετικά με αυτό.</strong> Τα μη διαθέσιμα προϊόντα αποστέλλονται
						μόλις καταστούν διαθέσιμα. Οι παραδόσεις γίνονται εργάσιμες ημέρες μεταξύ 09:00- 17:00.<br/>

						<strong>Για όλες τις αγορές  από 39 ευρώ και άνω και βάρους έως 4 κιλά η αποστολή είναι δωρεάν.</strong>

						Για αγορά κάτω από 39 ευρώ και έως 4 κιλά η επιβάρυνση της παραγγελίας είναι μόνο 2 ευρώ.

						Καθε επιπλέον κιλό άνω των 4 επιβαρύνεται με εξοδα μόνο 1 ευρώ το κιλό.

						Για ογκώδη παραγγελίες προηγείται συνεννόηση με τον πελάτη σχετικά με τον τρόπο και τα έξοδα αποστολής.

						Τα προϊόντα με την ένδειξη «προϊόν ψυγείου» δεν αποστέλλονται εκτός Αττικής και δεν επιστρέφονται για λόγους ασφάλειας στην διακίνηση των προϊόντων. <br/>

						<strong>To φαρμακείο μας παραδίδει και Σάββατο παραγγελείες χωρίς επιπλέον προσαύξηση στα μεταφορικά!</strong>

						Για να μπορέσετε να παραλάβετε την παραγγελία σας Σάββατο θα πρέπει να το έχετε αναφέρει στις παρατηρήσεις της παραγγελία σας. 

						Παραδόσεις Σαββάτου σε νησιά θα πρέπει να παραδίδονται νωρίς το μεσημέρι της Παρασκευής στην acs, για να μειώνεται η πιθανότητα μη παράδοσης της παραγγελίας Σάββατο. Για τα νησιά, επομένως, θα γίνεται επίδοση Σαββάτου κατόπιν συννενόησης με τον πελάτη.<br/>

						<strong><h3>Στις παρακάτω περιοχές, η acs παραδίδει Σάββατο:</h3></strong>

						Αθήνα , Θεσσαλονίκη, Μυτιλήνη , Χίο , Αγρίνιο , Αμφιλοχία , Μεσολόγγι , Ναύπακτο , Αίγινα , Πόρο , Σαλαμίνα , Ζάκυνθο , Κέρκυρα, Λευκάδα , Κεφαλλονιά , Άρτα , Ιωάννινα, Πρέβεζα , Καρδίτσα , Λάρισα , Βόλο , Τρίκαλα , Αλεξανδρούπολη , Ορεστιάδα , Ξάνθη , Κομοτηνή , Ηράκλειο , Αγ.

						Νικόλαο , Ρέθυμνο , Χανιά , Σητεία , Ιεράπετρα ,Πάρο , Δράμα , Διδυμότειχο , Καβάλα , Σέρρες , Γρεβενά , Καστοριά , Κοζάνη , Πτολεμαίδα , Φλώρινα , Αλεξάνδρεια , Βέροια , Κιλκίς , Γιαννιτσά , Έδεσσα , Κατερίνη , Νεα Μουδανιά , Πολύγυρο , Άργος , Ναύπλιο , Τρίπολη , Αίγιο , Πάτρα , Αμαλιάδα , Πύργο , Κόρινθο , Σπάρτη , 
						Καλαμάτα , Θήβα , Λιβαδειά , Χαλκίδα , Αλιβέρι , Καρπενήσι , Λαμία , Άμφισσα ,  Καλοχώρι , Λαγκαδά , Σίνδος , Ασπροβάλτα , Παλλήνη , Πικέρμι , Παιανία , Ραφήνα , Λαύριο , Κορωπί .
						<br/>
						<a href='index.php'><input class='button egg' type='button' value='Επιστροφή στην αρχική σελίδα'></a>
						</div>
					</article>
					<br/><br/>		
					</div>	
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