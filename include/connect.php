<?php
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "sitedb";


	$conectare = mysqli_connect($host, $user, $password, $dbname) or die("Conectarea la baza de date a esuat!");


	/*
		ID(1)
		Nume(2)
		Parola(3)
		Email(4)

	*/

?>