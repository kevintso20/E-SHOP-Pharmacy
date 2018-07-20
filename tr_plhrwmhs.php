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
					<h3 id='welcome'> ΚΑΛΩΣ ΗΡΘΑΤΕ Online Φαρμακείο <br/> ΔΩΡΕΑΝ ΑΠΟΣΤΟΛΗ ΑΝΩ ΤΩΝ 40 ΕΥΡΩ </h3><br/>
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
						<h2 id='faceh2'>ΤΡΟΠΟΙ ΠΛΗΡΩΜΗΣ</h2><br/><br/>
					
						<div class='terms1'>
						<strong>Μπορείτε να πληρώσετε την παραγγελία σας με τους εξής τρόπους:</strong><br/>

						<strong>Αντικαταβολή Μετρητοίς</strong><br/>
						Τα προϊόντα αποστέλλονται με courier και εσείς πληρώνετε το αντίτιμο κατά την παραλαβή.
						Για αποστολές με αντικαταβολή υπάρχει μια επιπλέον χρέωση €1,50 στα έξοδα της αποστολής.<br/>
						<strong>Κατάθεση σε Τραπεζικό Λογαριασμό</strong><br/>
						Εάν δεν έχετε πιστωτική κάρτα ή αν δεν μπορείτε να βρίσκεστε στο σπίτι για την παραλαβή των προϊόντων σας, μπορείτε 
						να εξοφλήσετε την παραγγελία σας μέσω τραπεζικού λογαριασμού. Για την καλύτερη εξυπηρέτηση σας, παρακαλούμε να δίνετε στην 
						τράπεζα ως αιτιολογία το Ονοματεπώνυμο σας και τον Αριθμό Παραγγελίας. Στην συνέχεια παρακαλούμε αποστείλατε το αποδεικτικό 
						κατάθεσης μέσω e-mail στο info@TEICMpharmacy.gr.<br/>
						<strong>Οι τραπεζικοί λογαριασμοί στους οποίους μπορείτε να καταθέσετε τα χρήματα είναι οι ακόλουθοι:</strong><br/>
						<h3>1. ΤΡΑΠΕΖΑ ΠΕΙΡΑΙΩΣ:</h3>
						<ul class='bank'>
							<li>ΑΡΑΜΠΑΤΖΗ Ε.</li>
							<li>IBAN:GR16 0112 1023 9875 1029 1267 102</li>
							<li>Αρ.Λογ/σμού: 6633-9993-8817</li>
						</ul><br/>
						<h3>2. EUROBANK BANK:</h3>
						<ul class='bank'>
							<li>ΤΣΕΛΙΟΣ Σ.</li>
							<li>IBAN: GR4602604190000131230596873</li>
							<li>GR 220264190000130100256038</li>
							<li>Αρ.Λογ/σμού: 1122-3497-13-0102396738</li>
						</ul><br/>
						<h3>3. ΕΘΝΙΚΗ ΤΡΑΠΕΖΑ:</h3>
						<ul class='bank'>
							<li>ΠΑΝΤΟΥΛΑ Ι.</li>
							<li>IBAN: GR6101104640000041203945768</li>
							<li>Αρ.Λογ/σμού: 192/123498-11</li>
						</ul><br/>
						<h3>4. ALPHA BANK:</h3>
						<ul class='bank'>
							<li>ΤΣΟΛΑΚΟΥ Κ. Α.</li>
							<li>IBAN: GR2230987654310002789005250</li>
							<li>Αρ.Λογ/σμού: 900-11-1869585250</li>
						</ul>
						 

						<strong>Το κόστος της τραπεζικής προμήθειας επιβαρύνει τον Πελάτη.</strong><br/>
						<strong>Πιστωτική Κάρτα</strong><br/>
						Κάθε αγορά από τον διαδικτυακό τόπο του www.carelife.gr πραγματοποιείται κατά επιλογή του αγοραστή με δυνατότητα εξόφλησης και με πιστωτικές κάρτες VISA και MASTERCARD.
						Οι συναλλαγές πραγματοποιούνται ηλεκτρονικά με ασφάλεια, σε πραγματικό χρόνο (real time), μεταξύ του Αγοραστή και ιδιοκτήτη της κάρτας με την Τράπεζα Πειραιώς (Winbank) η οποία διεκπεραιώνει την συναλλαγή για λογαριασμό της www.carelife.gr .

						Στην διαδικασία αυτή, το φαρμακείο μας δεν έχει καμία συμμετοχή και τα ευαίσθητα στοιχεία της πιστωτικής/χρεωστικής σας κάρτας δεν αποθηκεύονται στο σύστημά της.

						<br/>Σε περίπτωση που ο αγοραστής που πραγματοποιεί την συναλλαγή δεν είναι το ίδιο πρόσωπο με τον ιδιοκτήτη της Πιστωτικής Κάρτας,δεν φέρoυμε καμία ευθύνη και δεν έχουμε υποχρέωση επιστροφής χρημάτων.
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