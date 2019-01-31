<?php

	require 'connect.php';

	session_start();

	if((isset($_POST['email'])) && (isset($_POST['parola'])) && (!empty($_POST['email'])) && (!empty($_POST['parola'])))
	{
			$email = trim($_POST['email']);
			$parola = trim($_POST['parola']);

			$select = "SELECT * FROM users WHERE Email = '$email'";
			$result = mysqli_query($conectare, $select);
			$row = $result->fetch_assoc();

			if($chechpass = password_verify($parola, $row['Password']))
			{
				$_SESSION['nume'] = $row['Name'];
				$_SESSION['parola'] = $row['Password'];
				$_SESSION['email'] = $row['Email'];
				$_SESSION['id'] = $row['ID'];
				$_SESSION['admin'] = $row['Admin'];
				$_SESSION['logas'] = $row['Logas'];
				header("Location: ../index.php?status=succes");
			}else
			{
				header("Location: ../login.php?status=gresit");
				exit(0);
			}


	}
	else
	{
		header("Location: ../login.php?status=campuriobligatorii");
	}
?>