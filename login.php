<?php
	
	session_start();

	if(!empty($_SESSION['nume']))
		header("Location: index.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Proiect 1</title>

	<!-- META -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- END META -->


	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



	<link rel="stylesheet" type="text/css" href="assets/css/register_login_contact.css?v1.0">
	<!-- END CSS -->


	<!-- JS -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- END JS -->
	

</head>
<body>

	<div class="container">
		<div class="register">

			<form action="include/login.inc.php" method="POST" autocomplete="off">
				<p class="formtext">Email: </p> <input type="email" name="email">
				<br>
				<p class="formtext">Parola: </p> <input type="password" name="parola">
				<br>
				<br>
				<label>
				<input type="checkbox" name="remember">Remeber me
				</label>
				<br>
				<br>
				<br>
				<input type="submit" name="submit" value="Login">
				<br>
				<br>

				<a href="index.php"><< Home</a>
				<a href="register.php" style="margin-left: 20px;">Register >></a>

				<?php

			if(isset($_GET['status']) && $_GET['status'] == "gresit")
				echo '<br><br><br><p class="text-danger">Email-ul sau parola sunt gresite!</p>';
			else if(isset($_GET['status']) && $_GET['status'] == "campuriobligatorii")
				echo '<br><br><br><p class="text-danger">Toate campurile sunt obligatorii!</p>';
			else if(isset($_GET['status']) && $_GET['status'] == "needlog")
				echo '<br><br><br><p class="text-danger">Trebuie sa fii conectat pentru a avea acces la pagina!</p>';

		?>
	</form>
		</div>
	</div>

<script type="text/javascript" src="assets/js/script.js?v1.0"></script>
</body>
</html>