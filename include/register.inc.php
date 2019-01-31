<?php

	require 'connect.php';


	

	if((isset($_POST['nume']) && (isset($_POST['email'])) && (isset($_POST['parola'])) && (!empty($_POST['nume'])) && (!empty($_POST['email'])) && (!empty($_POST['parola']))))
			{
				$nume = trim($_POST['nume']);
				$parola = trim($_POST['parola']);
				$email = trim($_POST['email']);


				$verificare = "SELECT Email FROM users WHERE Email='$email'";	
				$result = mysqli_query($conectare, $verificare);

				$verificare = "SELECT Name FROM users WHERE Name='$nume'";	
				$result2 = mysqli_query($conectare, $verificare);

				if(mysqli_num_rows($result) > 0)
				{
					header("Location: ../register.php?stauts=repetareemail");
					exit(0);
				}else if(mysqli_num_rows($result2) > 0)
				{
					header("Location: ../register.php?stauts=repetarenume");
					exit(0);
				}
				else
				{
					$password_hash = password_hash($parola, PASSWORD_DEFAULT);

					$inserare = "INSERT INTO users(Name, Email, Password) VALUES ('$nume', '$email', '$password_hash')";
					$result = mysqli_query($conectare, $inserare);

					header("Location: ../register.php?status=succes");
				}
			}else
			{
				header("Location: ../register.php?stauts=campuriobligatorii");
				exit(0);
			}
			

?>