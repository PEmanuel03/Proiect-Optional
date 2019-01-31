<?php


	require 'connect.php';

	session_start();

	$id = $_GET['id'];
	$meid = $_SESSION['id'];
	$date = date("Y/m/d");

	$friend = "INSERT INTO friendreq(From_F, To_F, Date_F) VALUES ('$meid', '$id', '$date')";
	$result_friend = mysqli_query($conectare, $friend);

	header("Location: ../profil.php?id=".$id);
?>