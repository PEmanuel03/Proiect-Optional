<?php

	require 'include/connect.php';


	session_start();
	$id = $_GET['id'];
	$update = "UPDATE friendreq SET Accept_Friend = 1 WHERE ID = '$id'";
	$result_update = mysqli_query($conectare, $update);

	header("Location: ../friendreq.php");

?>
