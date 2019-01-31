<?php
	
	session_start();

	require 'include/connect.php';
	
	if(isset($_SESSION['id']))
	{
		$meid = $_SESSION['id'];

		if($row_user['Logas'] == 0)
		{
			$update = "UPDATE users SET Logas = 1 WHERE id='$meid'";
	    $result_update = mysqli_query($conectare, $update);
			$_SESSION['id'] = $_GET['id'];
		$_SESSION['logas'] = 0;
		$_SESSION['logas'] = 1;

		}
		
	header("Location: profil.php?id=".$_GET['id']);
	}
	else
	{
		header("Location: index.php?status?error");
		exit(0);
	}



?>