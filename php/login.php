<?php 

	require("conection.php");

	session_start();

	$email = $_POST['email'];
	$pass = MD5($_POST['pass']);
	$metodo = $_POST['metodo'];
	$result = mysqli_query($conn,"SELECT emailverificador FROM usuario WHERE emailverificador = '$email' and senha = '$pass'");

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);

		    if($email == "" || $email == null){
		    	echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='../login.html';</script>";
		    }else{
		        if($row['emailverificador'] != $email){
			        echo"<script language='javascript' type='text/javascript'>alert('Esse email não existe');window.location.href='../login.html';</script>";
			        die();
		        }else{
					$result = mysqli_query($conn,"SELECT IDuser, nome,profile_photo FROM usuario WHERE emailverificador = '$email' and senha = '$pass'");
					$row = mysqli_fetch_assoc($result);
					$id= $row['IDuser'];
					$nome = $row['nome'];
					$img = $row['profile_photo'];

		      		if ($metodo == 0){
				        $query = "INSERT INTO login_event (iduser,login,facebook) VALUES ('$id','$nome','$metodo')";
				    }else{
				    	$query = "INSERT INTO login_event (iduser,login,facebook) VALUES ('1','$nome','$metodo')";
					}
					echo $query;
					$insert = mysqli_query($conn,$query);

					if($insert){
						$_SESSION['iduser'] = $id;
			        	$_SESSION['email'] = $email;
			        	$_SESSION['nome'] = $nome;
			        	$_SESSION['img'] = $img;
						header('location: ../checkin.php');
						echo "1";
			        }else{
			        	echo"<script language='javascript' type='text/javascript'>alert('Usuario não existe, redirecionando para cadastro');window.location.href='../cad_user.html'</script>";
			        }

			        mysqli_close($conn);
		    	}
		    }
		} else {
			echo"<script language='javascript' type='text/javascript'>alert('Usuario não encontrado, redirecionando para login novamente');window.location.href='../login.html'</script>";
		}
?>