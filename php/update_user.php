<?php
	require("conection.php");
	
	$email = addslashes(trim($_POST['email']));
	$pass = addslashes(trim($_POST['pass']));
	$cpass = addslashes(trim($_POST['cpass']));
	$name = addslashes(trim($_POST['name']));
	$sexo = addslashes(trim($_POST['sexo']));
	$username = addslashes(trim($_POST['username']));
	$bday = addslashes(trim($_POST['bday']));
	
	$uploadir = 'dbimage/'.$email.'/';
	$img = $uploadir . basename($_FILES['img']['name']);
	$upload = move_uploaded_file($_FILES['img']['tmp_name'], $img);

	$sql = "INSERT INTO usuario (
		Nome, 
		Apelido,
		Sexo, 
		EmailVerificador,
		Senha, 
		DatadeNascimento, 
		status_profile,
		Profile_photo
	)
	values(	
		'{$name}',	
		'{$username}',	
		'{$sexo}',	
		'{$email}',	
		'{$pass}',	
		'{$bday}',	
		'1',
		'{$img}'
	)";

	$sql_out = mysqli_query($conn,$sql);
	if ($sql_out){
		echo "insercao realizada";
	} else { 
		echo "insercao não realizada";
	}
?>