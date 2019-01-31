<?php
	
	require 'include/connect.php';

	session_start();

	if(!isset($_SESSION['nume']))
		header("Location: login.php?status=needlog");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Proiect 1</title>

	<!-- META -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<!-- END META -->


	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



	<link rel="stylesheet" type="text/css"  media="screen and (min-width:900px)" href="assets/css/widescreen.css?v1.0">
	<link rel="stylesheet" type="text/css"  media="screen and (min-width:630px) and (max-width: 900px)" href="assets/css/landscape.css?v1.0">
	<link rel="stylesheet" type="text/css"  media="screen and (max-width:600px)" href="assets/css/smallscreen.css?v1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/register_login_contact.css?v1.0">
	<!-- END CSS -->


	<!-- JS -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- END JS -->

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- END FONTS -->
	

</head>
<body>

	<div class="widescreen">
	<nav class="navbar navbar-toggleable-sd navbar-inverse">
		<a class="navbar-brand" href="index.php">LOGO</a>
		<ul class="navbar-nav">
		<li class="nav-item">
				<a class="nav-link" href="index.php">Acasă</a>
			</li>

		
			<?php

				if(isset($_SESSION['nume'])) 
			echo '

			<li class="nav-item">
				<a class="nav-link" href="portofoliu.php">Portofoliu</a>
			</li>';
			?>

			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
		</ul>

		<ul class="navbar-nav right">
		<?php

			if(!isset($_SESSION['nume']))
				echo '
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>';
			else
				echo '
			<li class="nav-item">
				<a class="nav-link" href="profil.php?id='.$_SESSION['id'].'">Profil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="include/logout.inc.php">Log Out</a>
			</li>';
			?>
		</ul>
	</nav>
</div>


<div class="smallscreen">
	
	<nav class="navbar navbar-toggleable-sd navbar-inverse">
		<a class="navbar-brand" href="index.php">LOGO</a>
		<button class="navbar-brand toggle" onclick="collapse()"><img class="toggle" src="assets/glyph-iconset-master/svg/si-glyph-align-right.svg" width="25" height="25"></button>
		<div class="container">
		<ul class="navbar-nav" id="target">
			<br>
			<br>
			<br>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Acasă</a>
			</li>

			
			<?php

				if(isset($_SESSION['nume'])) 
			echo '


			<li class="nav-item">
				<a class="nav-link" href="portofoliu.php">Portofoliu</a>
			</li>';
			?>

			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>

			<?php

			if(!isset($_SESSION['nume']))
				echo '
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>';
			else
				echo '
			<li class="nav-item">
				<a class="nav-link" href="profil.php?id='.$_SESSION['id'].'">Profil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="include/logout.inc.php">Log Out</a>
			</li>';
			?>
		</ul>
	</nav>
</div>

	<div class="landscape">
	
	<nav class="navbar navbar-toggleable-sd navbar-inverse">
		<a class="navbar-brand" href="index.php">LOGO</a>
		<button class="navbar-brand toggle" onclick="collapse2()"><img class="toggle" src="assets/glyph-iconset-master/svg/si-glyph-align-right.svg" width="25" height="25"></button>
		<div class="container">
		<ul class="navbar-nav" id="target2">
			<br>
			<br>
			<br>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Acasă</a>
			</li>

			<?php

				if(isset($_SESSION['nume'])) 
			echo '


			<li class="nav-item">
				<a class="nav-link" href="portofoliu.php">Portofoliu</a>
			</li>';
			?>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>

			<?php

			if(!isset($_SESSION['nume']))
				echo '
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>';
			else
				echo '
			<li class="nav-item">
				<a class="nav-link" href="profil.php?id='.$_SESSION['id'].'">Profil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="include/logout.inc.php">Log Out</a>
			</li>';
			?>
		</ul>
	</nav>
</div>

	<div class="landscape">
	
	<nav class="navbar navbar-toggleable-sd navbar-inverse">
		<a class="navbar-brand" href="index.php">LOGO</a>
		<button class="navbar-brand toggle" onclick="collapse2()"><img class="toggle" src="assets/glyph-iconset-master/svg/si-glyph-align-right.svg" width="25" height="25"></button>
		<div class="container">
		<ul class="navbar-nav" id="target2">
			<br>
			<br>
			<br>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Acasă</a>
			</li>

			<?php

				if(isset($_SESSION['nume'])) 
			echo '

			<li class="nav-item">
				<a class="nav-link" href="portofoliu.php">Portofoliu</a>
			</li>';
			?>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
			<?php

			if(!isset($_SESSION['nume']))
				echo '
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>';
			else
				echo '
			<li class="nav-item">
				<a class="nav-link" href="profil.php">Profil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="include/logout.inc.php">Log Out</a>
			</li>';
			?>
		</ul>
	</nav>
</div>

<div class="container">
	<?php
		$id = $_GET['id'];

		$mesaj= "SELECT * FROM message WHERE ID='$id'";
		$result_mesaj = mysqli_query($conectare, $mesaj);
		$row_mesaj = mysqli_fetch_assoc($result_mesaj);


		$update = "UPDATE message SET Read_M = '1' WHERE ID='$id'";
		$result_update = mysqli_query($conectare, $update);

		if($_SESSION['id'] == $row_mesaj['To_M'])
		{
			$id = $row_mesaj['From_M'];
		$user = "SELECT * FROM users WHERE ID='$id'";
		$result_user = mysqli_query($conectare, $user);
		$row_user = mysqli_fetch_assoc($result_user);


		echo '<p><b>From:</b> '.$row_user["Name"].'</p>';
		echo '<p><b>Subject:</b> '.$row_mesaj["Subject"].'</p>';
		echo '<p><b>Date to sent: </b> '.$row_mesaj["Date_M"].'</p>';
		echo '<div class="mesaj"><p id="mesaj"><b>Message:</b><br>'.$row_mesaj["Message"].'</p></div>';
		}
		else
		{
			echo "You don't have access to view this message!";
			exit(0);
		}

		
	?>

	<a href="message.php" style="margin-left: 20px;"><< Back</a>

</div>

<script type="text/javascript" src="assets/js/script.js?v1.0"></script>
</body>
</html>