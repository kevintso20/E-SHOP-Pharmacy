<?php

$host="localhost";
$username="root";
$password="";
$database="test";

$link=mysql_connect($host, $username, $password) or die("Cannot connect to host.");
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
mysql_select_db($database) or die("Cannot connect to database.");
error_reporting(0);

?>
