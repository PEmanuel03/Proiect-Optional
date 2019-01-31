<?php
	
	require 'connect.php';

	session_start();

	if(isset($_POST['mesaj']) && isset($_POST['subiect']) && !empty($_POST['mesaj']) && !empty($_POST['subiect']))
	{
		$meid = $_SESSION['id'];
	$receiver = $_GET['id'];
	$mesaj = trim($_POST['mesaj']);
	$subiect = trim($_POST['subiect']);
	$data = date("Y/m/d");

	$inserare = "INSERT INTO message(Subject, Message, To_M, From_M, Date_M) VALUES('$subiect', '$mesaj', '$receiver', '$meid','$data')";
	$result_insert = mysqli_query($conectare, $inserare);

	if($_GET['m']==0)
	header("Location: ../sendmessage.php?status=mesajtrimis&receiver=".$_GET['id']);
else
	header("Location: ../reply.php?status=success&id=".$_GET['id']);
	}
	else
	{
		header("Location: ../sendmessage.php?status=campuriobl");
		exit(0);
	}
	
?>