<?php
	require("conection.php");

	session_start();
	
	$latitude = addslashes(trim($_POST['checkin-lat']));
	$longitude = addslashes(trim($_POST['checkin-lon']));

	$_SESSION['latitude'] = $latitude;
	$_SESSION['longitude'] = $longitude;
	
	$result = mysqli_query($conn,"SELECT idplace, Nome_local FROM places WHERE Latitude = '$latitude' and Longitude = '$longitude'");

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nome_local'] = $row['Nome_local'];
		$place = $row['idplace'];
		$user = $_SESSION['iduser'];

		$sql = "INSERT INTO check_in(IDplace, IDuser, duration) VALUES ({$place},{$user},'0')";

		$result = mysqli_query($conn,$sql);

		$upd = "UPDATE places SET proportion_push = proportion_push + 1 WHERE IDplace = {$idplace}";

		//mysqli_query($conn,$upd);

		if ($result) 
			echo"<script language='javascript' type='text/javascript'>alert('Checkin realizado em ".$_SESSION['nome_local']."');window.location.href='../menu.php'</script>";
		else
			echo"<script language='javascript' type='text/javascript'>alert('Checkin não realizado, voltando ao menu anterior');window.location.href='../checkin.php'</script>";
	} else {
		echo"<script language='javascript' type='text/javascript'>alert('Local ainda não cadastrado, cadastre-o');window.location.href='../criar_place.php'</script>";
	}

?>