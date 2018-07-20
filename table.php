<?php
	$host="localhost";
	$username="root";
	$password="";
	$database="3749_3768_3798_3846";

	$link=mysql_connect($host, $username, $password) or die("Cannot connect to host.");
	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
	mysql_select_db($database) or die("Cannot connect to database.");

	$query = mysql_query ("CREATE TABLE orders (id INT NOT NULL AUTO_INCREMENT,
												id_xrhsth INT NOT NULL,
												id_proiontos INT NOT NULL,
												posothta INT NOT NULL,
												PRIMARY KEY (id),
												CONSTRAINT fk_xrhsth FOREIGN KEY (id_xrhsth)
												REFERENCES register(id),
												CONSTRAINT fk_proion FOREIGN KEY (id_proiontos)
												REFERENCES proionta(id))");
	$query = mysql_query ("CREATE TABLE cart (id INT NOT NULL AUTO_INCREMENT,
												id_xrhsth INT NOT NULL,
												id_proiontos INT NOT NULL,
												posothta INT NOT NULL,
												PRIMARY KEY (id),
												CONSTRAINT fk_xrhsth2 FOREIGN KEY (id_xrhsth)
												REFERENCES register(id),
												CONSTRAINT fk_proion2 FOREIGN KEY (id_proiontos)
												REFERENCES proionta(id))");
?>
