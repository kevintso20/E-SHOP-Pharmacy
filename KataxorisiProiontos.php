<?php
echo"<meta charset='utf-8' />";
if(isset($_POST['submit'])){
	mysql_connect("127.0.0.1","root","");
	mysql_select_db("3749_3768_3798_3846");
	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
	$check1 = false;
	

	//$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageData = $_FILES["image"]["tmp_name"];
	$imageName = $_FILES["image"]["name"];	
	//$imageType = mysql_real_escape_string($_FILES["image"]["type"]);
	$imageType = $_FILES["image"]["type"];
	$imagePath = "uploaded/".$imageName;
	
	move_uploaded_file($imageData,$imagePath);
	
	$imagePath = "uploaded/".$imageName;
	$check1 = true;		
					
	
	$query="select * from proionta";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	
	$i=0;
	$telefto=3000;
	//krataei thn teleftea engrafh to id
	while($i< $num){
		$telefteo=mysql_result($result,$i,"id");		
		$i++;
	}
	$telefteo = $telefteo + 1;
	
	
		if (empty($_FILES['cover_image']['name'])){
		
		}						  
	
	$onoma=$_POST["onoma"];
	$textarea=$_POST["Text1"];	
	$timh=$_POST["timh"];
	$teliki_timh=$_POST["teliki_timh"];
	$posotita=$_POST["posotita"];
	$category=$_POST["category"];
	$subcategory=$_POST["subcategory"];
	$diathesimo = 1;
	
	
	
	
	
	
	
	// elenxos ean o xristis exei valei fotografies
	if($check1 == true )
	{
		//elenxos gia ta pedia ean einai adia kai ean einai fotografies
		if(substr($imageType,0,5) == "image"  && $onoma!= "" && $posotita != "" && $timh != "" && $textarea!= "")
		{ // elenxos gia to an o xrisths epelekse swsth katigoria
				if($category == "ΓΥΝΑΙΚΑ")
				{
					if($subcategory == "ΠΡΟΣΩΠΟ" || $subcategory == "ΣΩΜΑ" || $subcategory == "ΜΑΛΛΙΑ" || $subcategory == "ΜΑΚΙΓΙΑΖ")
					{
					// eisagwgh
						mysql_query("INSERT INTO proionta (id,onoma,plhrofories,timh,telikhtimh,eikona,diathesimi_posothta) VALUES('".$telefteo."','".$onoma."','".$textarea."','".$timh."','".$teliki_timh."','".$imagePath."','".$posotita."')");
						mysql_query("INSERT INTO  kathgories (id_proiontos,onoma_kathgorias,onoma_upokathgorias) VALUES ('".$telefteo."','".$category."','".$subcategory."')");
						echo "επιτυχης εισαγωγη";
						
					}else
					{
						echo "Μη Σωστή Επιλογή Κατηγορίας";	
					}
				}else if($category == "ΜΗΤΕΡΑ & ΠΑΙΔΙ")
				{
					if($subcategory == "ΕΓΚΥΜΟΣΥΝΗ" || $subcategory == "ΘΗΛΑΣΜΟΣ" || $subcategory == "ΑΞΕΣΟΥΑΡ ΓΙΑ ΜΩΡΑ" || $subcategory == "ΦΡΟΝΤΙΔΑ ΜΩΡΟΥ")
					{
						// eisagwgh
						mysql_query("INSERT INTO proionta (id,onoma,plhrofories,timh,telikhtimh,eikona,diathesimi_posothta,plhrofories_plus) VALUES('".$telefteo."','".$onoma."','".$textarea."','".$timh."','".$teliki_timh."','".$imagePath."','".$posotita."','".$textplas."')");
						mysql_query("INSERT INTO  kathgories (id_proiontos,onoma_kathgorias,onoma_upokathgorias) VALUES ('".$telefteo."','".$category."','".$subcategory."')");
						echo "επιτυχής εισαγωγή";						
					}else
					{
						echo "Μη Σωστή Επιλογή Κατηγορίας";	
					}						
				}else if($category == "ΑΝΔΡΑΣ")
				{
					if($subcategory == "ΠΡΟΣΩΠΟ" || $subcategory == "ΣΩΜΑ" || $subcategory == "ΞΥΡΙΣΜΑ" || $subcategory == "ΠΟΔΙΑ")
					{
					// eisagwgh
						mysql_query("INSERT INTO proionta (id,onoma,plhrofories,timh,telikhtimh,eikona,diathesimi_posothta,plhrofories_plus) VALUES('".$telefteo."','".$onoma."','".$textarea."','".$timh."','".$teliki_timh."','".$imagePath."','".$posotita."','".$textplas."')");
						mysql_query("INSERT INTO  kathgories (id_proiontos,onoma_kathgorias,onoma_upokathgorias) VALUES ('".$telefteo."','".$category."','".$subcategory."')");
						echo "επιτυχής εισαγωγή";
						
					}else
					{
						echo "Μη Σωστή Επιλογή Κατηγορίας";	
					}					
				}else if($category == "ΦΑΡΜΑΚΕΙΟ")
				{
					if($subcategory == "ΣΤΟΜΑΤΙΚΗ ΥΓΙΕΙΝΗ" || $subcategory == "ΟΜΟΙΟΠΑΘΗΤΙΚΑ" || $subcategory == "ΔΙΑΓΝΩΣΤΙΚΕΣ ΣΥΣΚΕΥΕΣ" || $subcategory == "ΥΓΕΙΑ ΚΑΤΩ ΑΚΡΩΝ")
					{
					// eisagwgh
						mysql_query("INSERT INTO proionta (id,onoma,plhrofories,timh,telikhtimh,eikona,diathesimi_posothta,plhrofories_plus) VALUES('".$telefteo."','".$onoma."','".$textarea."','".$timh."','".$teliki_timh."','".$imagePath."','".$posotita."','".$textplas."')");
						mysql_query("INSERT INTO  kathgories (id_proiontos,onoma_kathgorias,onoma_upokathgorias) VALUES ('".$telefteo."','".$category."','".$subcategory."')");
						echo "επιτυχής εισαγωγή";
						
					}else
					{
						echo "Μη Σωστή Επιλογή Κατηγορίας";	
					}					
				}else if($category == "4 ΕΠΟΧΕΣ")
				{
					if($subcategory == "ΚΑΛΟΚΑΙΡΙ" || $subcategory == "ΦΘΙΝΟΠΩΡΟ" || $subcategory == "ΧΕΙΜΩΝΑΣ" || $subcategory == "ΑΝΟΙΞΗ")
					{
					// eisagwgh
				
						mysql_query("INSERT INTO proionta (id,onoma,plhrofories,timh,telikhtimh,eikona,diathesimi_posothta,plhrofories_plus) VALUES('".$telefteo."','".$onoma."','".$textarea."','".$timh."','".$teliki_timh."','".$imagePath."','".$posotita."','".$textplas."')");
						mysql_query("INSERT INTO  kathgories (id_proiontos,onoma_kathgorias,onoma_upokathgorias) VALUES ('".$telefteo."','".$category."','".$subcategory."')");
						echo "επιτυχής εισαγωγή";
						
					}else
					{
						echo "Μη Σωστή Επιλογή Κατηγορίας";	
					}					
				}	
		}		
	}			
} 

echo "

<html>
	<head>
	<meta charset='utf-8' />
	<title>ΕΙΣΑΓΩΓΗ ΠΡΟΙΟΝΤΟΣ</title>
	<h1>ΚΑΤΑΧΩΡΗΣΗ ΠΡΟΙΟΝΤΟΣ</h1>
	<link href=\"blobStyle.css\" rel=\"stylesheet\">
	</head>
	<body>
			<div >
				<form action='KataxorisiProiontos.php' method='POST' enctype='multipart/form-data'>
				     Όνομα προϊόντος
					<input  name = 'onoma' type='text' placeholder='Όνομα προϊόντος ' value ='' >
							</br>Τεμάχια
					<input name = 'posotita' type='text'placeholder='Τεμάχια' value ='' >
							</br>Τιμή
					<input name = 'timh' type='text'placeholder='Τιμή' value ='' >
							</br>Τελική Τιμή
					<input  name = 'teliki_timh' type='text' placeholder='Τελική Τιμή' value =''>
							<br>
					<p>Κατηγορία
						<select name='category'>
							<option value='ΓΥΝΑΙΚΑ'>ΓΥΝΑΙΚΑ</option>
							<option value='ΜΗΤΕΡΑ & ΠΑΙΔΙ'>ΜΗΤΕΡΑ & ΠΑΙΔΙ</option>
							<option value='ΑΝΔΡΑΣ'>ΑΝΔΡΑΣ</option>
							<option value='ΦΑΡΜΑΚΕΙΟ'>ΦΑΡΜΑΚΕΙΟ</option>
							<option value='4 ΕΠΟΧΕΣ'>4 ΕΠΟΧΕΣ</option>					
						</select>
					</p>
					<p>Υποατηγορία
						<select name='subcategory'>
							<option value='ΠΡΟΣΩΠΟ'>ΠΡΟΣΩΠΟ</option>
							<option value='ΣΩΜΑ'>ΣΩΜΑ</option>
							<option value='ΜΑΛΛΙΑ'>ΜΑΛΛΙΑ</option>
							<option value='ΜΑΚΙΓΙΑΖ'>ΜΑΚΙΓΙΑΖ</option>
							<option value='ΕΓΚΥΜΟΣΥΝΗ'>ΕΓΚΥΜΟΣΥΝΗ</option>
							<option value='ΘΗΛΑΣΜΟΣ'>ΘΗΛΑΣΜΟΣ</option>
							<option value='ΑΞΕΣΟΥΑΡ ΓΙΑ ΜΩΡΑ'>ΑΞΕΣΟΥΑΡ ΓΙΑ ΜΩΡΑ</option>	
							<option value='ΦΡΟΝΤΙΔΑ ΜΩΡΟΥ'>ΦΡΟΝΤΙΔΑ ΜΩΡΟΥ</option>
							<option value='ΞΥΡΙΣΜΑ'>ΞΥΡΙΣΜΑ</option>	
							<option value='ΠΟΔΙΑ'>ΠΟΔΙΑ</option>
							<option value='ΣΤΟΜΑΤΙΚΗ ΥΓΙΕΙΝΗ'>ΣΤΟΜΑΤΙΚΗ ΥΓΙΕΙΝΗ</option>	
							<option value='ΟΜΟΙΟΠΑΘΗΤΙΚΑ'>ΟΜΟΙΟΠΑΘΗΤΙΚΑ</option>	
							<option value='ΥΓΕΙΑ ΚΑΤΩ ΑΚΡΩΝ'>ΥΓΕΙΑ ΚΑΤΩ ΑΚΡΩΝ</option>
							<option value='ΔΙΑΓΝΩΣΤΙΚΕΣ ΣΥΣΚΕΥΕΣ'>ΔΙΑΓΝΩΣΤΙΚΕΣ ΣΥΣΚΕΥΕΣ</option>	
							<option value='ΚΑΛΟΚΑΙΡΙ'>ΚΑΛΟΚΑΙΡΙ</option>	
							<option value='ΦΘΙΝΟΠΩΡΟ'>ΦθΙΝΟΠΩΡΟ</option>
							<option value='ΧΕΙΜΩΝΑΣ'>ΧΕΙΜΩΝΑΣ</option>
							<option value='ΑΝΟΙΞΗ'>ΑΝΟΙΞΗ</option>									
						</select>
					</p>
					
								  
					<label> Πληροφορίες: </label> 
							</br>
					<textarea name='Text1' cols='30' rows='3'></textarea>
							<br>	
					<input  type='file' name='image' class='button' >
							<br>
					<input type='submit' name='submit' class='button' value='ΚΑΤΑΧΩΡΗΣΗ ΠΡΟΙΟΝΤΟΣ'>
				</form>
				<form action='main_admin.php'> 
				<input type='submit' name='submit' class='button' value='ΠΙΣΩ ΣΤΗΝ ΔΙΑΧΕΙΡΙΣΗ'>
				</form>
			</div>	
	</body>
</html>
";



?>