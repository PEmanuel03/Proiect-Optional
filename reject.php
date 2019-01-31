<?php
	
	require 'include/connect.php';
	session_start();

	$id = $_GET['id'];
	$delete = "DELETE FROM friendreq WHERE ID='$id'";
	$result_delete = mysqli_query($conectare, $delete);

	header("Location: friendreq.php");
?>