<?php

		require 'connect.php';

	session_start();


	$select = $_POST["level"];
	$id = $_GET["id"];

	if($_SESSION['id'] != $id)
	{
		switch ($select) {
		case 'helper':
				$update = "UPDATE users  SET Admin = 1 WHERE ID='$id'";
				$result = mysqli_query($conectare, $update);
			break;
		case 'sysop':
				$update = "UPDATE users  SET Admin = 4 WHERE ID='$id'";
				$result = mysqli_query($conectare, $update);
			break;
		case 'moderator':
				$update = "UPDATE users  SET Admin = 2 WHERE ID='$id'";
				$result = mysqli_query($conectare, $update);
			break;

		case 'admin':
				$update = "UPDATE users  SET Admin = 3 WHERE ID='$id'";
				$result = mysqli_query($conectare, $update);
			break;

		case 'user':
				$update = "UPDATE users  SET Admin = 0 WHERE ID='$id'";
				$result = mysqli_query($conectare, $update);
			break;
		default:
			echo "Eroare";
			die();

	}

		header("Location: ../profil.php?id=".$id);
	
	}
	else
	{
		header("Location: ../errors/acces.php");
	}
	


	


?>