<?php
	$servername='localhost';
	$username='munim';
	$password='gaditek1';
	$dbname = "testdb";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}
?>
