<?php
	require("conection.php");

	session_start();

	$local = addslashes(trim($_POST['local']));

	$latitude = $_SESSION['latitude'];
	$longitude = $_SESSION['longitude'];

	
	
	$sql = "INSERT INTO check_in(IDplace, IDuser, duration) VALUES ({$place},{$user},'0')";

	$result = mysqli_query($conn,$sql);

	if ($result) 
		echo"<script language='javascript' type='text/javascript'>alert('Place criado, Checkin realizado em ".$_SESSION['nome_local']."');window.location.href='../menu.php'</script>";
	else
		echo"<script language='javascript' type='text/javascript'>alert('Criação de place não realizada, verifique!');window.location.href='../criar_place.php'</script>";

?>