<?php
	require("conection.php");
	
	$email = addslashes(trim($_POST['email']));

	$sql = "SELECT 
		Nome, 
		Apelido,
		Sexo, 
		EmailVerificador,
		Senha, 
		DatadeNascimento, 
		status_profile,
		Profile_photo
	FROM usuario
	WHERE EmailVerificador = '$email'
	)";

	$sql_out = mysqli_query($conn,$sql);
	if ($sql_out){
		echo"<script language='javascript' type='text/javascript'>window.location.href='../login.html'</script>";
	} else { 
		echo"<script language='javascript' type='text/javascript'>alert('Erro ao realizar cadastro, redirecionando para tela anterior');window.location.href='../cad_user.html'</script>";
	}
?>