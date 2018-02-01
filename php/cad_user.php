<?php
	require("conection.php");
	
	$email = addslashes(trim($_POST['email']));
	$pass = MD5(addslashes(trim($_POST['pass'])));
	$cpass = MD5(addslashes(trim($_POST['cpass'])));
	$name = addslashes(trim($_POST['name']));
	$sexo = addslashes(trim($_POST['sexo']));
	$username = addslashes(trim($_POST['username']));
	$bday = addslashes(trim($_POST['bday']));

	if ($pass != $cpass) echo"<script language='javascript' type='text/javascript'>alert('Senhas são diferentes, redirecionando para tela anterior');window.location.href='../cad_user.html'</script>";

	if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 ) {
 
    $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
    $nome = $_FILES[ 'img' ][ 'name' ];

    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    $extensao = strtolower ( $extensao );
 
	    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
	        $novoNome = uniqid ( time () ) . $extensao;

	        $destino = '../dbimage/' .$name. $novoNome;
	 
	        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
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
					'{$destino}'
				)";

				$sql_out = mysqli_query($conn,$sql);
				if ($sql_out){
					echo"<script language='javascript' type='text/javascript'>window.location.href='../login.html'</script>";
				} else { 
					echo"<script language='javascript' type='text/javascript'>alert('Erro ao realizar cadastro, redirecionando para tela anterior');window.location.href='../cad_user.html'</script>";
				}
	        }
	        else
	            echo"<script language='javascript' type='text/javascript'>alert('Erro ao realizar cadastro, redirecionando para tela anterior');window.location.href='../cad_user.html'</script>";
	    }
	    else
	        echo"<script language='javascript' type='text/javascript'>alert('Erro ao realizar cadastro, redirecionando para tela anterior');window.location.href='../cad_user.html'</script>";
	}
	else
	    echo 'Você não enviou nenhum arquivo!';

?>