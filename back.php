<?php
		
	require 'include/connect.php';
	session_start();


	if(isset($_SESSION['id']))
	{
		$email = $_SESSION['email'];

	$select = "SELECT * FROM users WHERE Email = '$email'";
	$result_select = mysqli_query($conectare, $select);
	$row_select = mysqli_fetch_assoc($result_select);

	$_SESSION['id'] = $row_select['ID'];

	$update = "UPDATE users SET Logas = 0 WHERE Email = '$email'";
	$result_update = mysqli_query($conectare, $update);
	$_SESSION['logas'] = 0;
	header("Location: profil.php?id=".$_SESSION['id']);
	}
	


?>