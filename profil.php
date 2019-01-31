<?php
	
	require 'include/connect.php';

	session_start();



	if(!isset($_SESSION['nume']))
		header("Location: login.php?status=needlog");


	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

		$select = "SELECT * FROM users WHERE ID = '$id'";
		$result = mysqli_query($conectare, $select);
		$row = $result->fetch_assoc();

		$meid = $_SESSION['id'];
		$me = "SELECT * FROM users WHERE ID='$meid'";
		$result = mysqli_query($conectare, $me);
		$rowme = $result->fetch_assoc();

	
	}else
	{
		header("Location: login.php?status=needlog");
	}

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

<div class="content">
<div class="container">

	<ul>	
		<li>Name: <?php echo $row['Name']; ?></li>
		<li>Email: <?php echo $row['Email'] ?></li>
		<li>Clasa:
			<?php
				switch($row['Admin'])
				{
					case '0':
						echo "User";
						break;
					case '1':
						echo 'Helper';
						break;
					case '2':
						echo 'Moderator';
						break;
					case '3':
						echo 'Administrator';
						break;
					case '4':
						echo 'SySop';
						break;
					default:
						echo 'unknown';
						break;
				}



			?>
	</ul>


	<?php


		$idc = $_GET['id'];

		if($_SESSION['id'] != $idc)
			 echo '<a href="sendmessage.php?receiver='.$row["ID"].'">Send Message <a>';
		else
			 echo '<a href="message.php">Message<a>';



		echo "<br>";
	   if($rowme['Admin']>3 && $rowme['ID'] != $idc && $rowme['Logas'] == 0)
	   {
	   	echo '<a href="logas.php?id='.$idc.'">Log as</a>';
	   }else if($_SESSION['logas'] == 1)
	   {
	   		echo '<a href="back.php">Back</a>';
	   }


	   echo "<br>";

	   if($idc != $_SESSION['id'])
	   echo '<a href="include/addfriend.inc.php?id='.$idc.'">Add Friend</a>';
	else
		echo '<a href="friendreq.php">Friends</a>';
	     ?>

	<?php



		if($rowme['Admin'] > $row['Admin'] && $rowme['ID'] != $row['ID'] && $rowme['Admin'] > 3)
			 echo'
			<form action="include/changelevel.inc.php?id='.$row["ID"].'" method="POST">
				<select name="level">
					<option value="void"></option>
					<option value="user">User(0)</option>
					<option value="helper">Helper(1)</option>
					<option value="moderator">Moderator(2)</option>
					<option value="admin">Administrator(3)</option>
					<option value="sysop">SySop(4)</option>
				</select>
				<input type="submit" name="submit" value="Change">
			</form>';

		
		echo '<p>Users: </p>';
		$users = "SELECT * FROM users";
		$result3 = mysqli_query($conectare, $users);

			if(mysqli_num_rows($result3))
			{	
				while($row_users = mysqli_fetch_assoc($result3))
				{	
					$id = $row_users['ID'];
					if($id != $_SESSION['id'])
					echo '<a href="profil.php?id='.$id.'">'.$row_users['Name'].'<a>'.PHP_EOL;
				}
			}
	?>



</div>

<br>
<br>
<br>


</div>
<script type="text/javascript" src="assets/js/script.js?v1.0"></script>
</body>
</html>