<?php
	require("php/conection.php");

	session_start();

	$iduser = $_SESSION['iduser'];

	$sql = 'SELECT Nome, Apelido, Sexo, EmailVerificador, Senha, DatadeNascimento, profile_photo FROM usuario WHERE IDuser = {$iduser}';

	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

	echo $sql;

	$nome = $row['Nome'];
	$apelido = $row['Apelido'];
	$sexo = $row['Sexo'];
	$emailverificador = $row['EmailVerificador'];
	$senha = $row['Senha'];
	$datadenascimento = $row['DatadeNascimento'];
	$profile_photo = $row['profile_photo'];
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Wizzy - Cadastro de Usuario</title>
    
    
    <link rel="stylesheet" href="css/reset_cad_user.css">   
    <link rel="stylesheet" href="css/style_cad_user.css">
    
  </head>

  <body>
		<form id="msform" action="php/cad_user.php" method="POST" enctype="multipart/form-data">
		  	<ul id="progressbar">
		    	<li class="active">Dados de Login</li>
		    	<li>Perfil</li>
		    	<li>Informações Pessoais</li>
		  	</ul>
			 <fieldset>
			    <h2 class="fs-title">Alterar conta</h2>
			    <input type="email" name="email" placeholder="Email" value=<?php echo $emailverificador; ?> />
			    <input type="password" name="pass" placeholder="Senha" />
			    <input type="password" name="cpass" placeholder="Confirme a Senha" />
			    <input type="button" name="next" class="next action-button" value="Proximo" />
			  </fieldset>
			  <fieldset>
			    <h2 class="fs-title">Perfil</h2>
			    <h3 class="fs-subtitle">Não iremos vender suas informações</h3>
			    <input type="text" name="name" placeholder="Nome" value=<?php echo $nome; ?> />
			    <input type="text" name="username" placeholder="Defina seu Username" value=<?php echo $apelido; ?>/>
			    <input type="button" name="previous" class="previous action-button" value="Anterior" />
			    <input type="button" name="next" class="next action-button" value="Proxima" />
			  </fieldset>
			  <fieldset>
			    <h2 class="fs-title">Informações Pessoais</h2>
			    <h3 class="fs-subtitle">Sexo</h3>
			    <label>
			      <select id="sexo" name="sexo">
			      	<?php
			      		if ($sexo == 'M'){
			      			echo '<option value="M">Masculino</option>';
			      			echo '<option value="F">Feminino</option>';
			      		} else {
			        		echo '<option value="F">Feminino</option>';
			        		echo '<option value="M">Masculino</option>';
			        	}
			        ?>
			      </select>
			     </label>
			    <h3 class="fs-subtitle">Data de Nascimento</h3>
			    <input type="date" name="bday" value=<?php echo $datadenascimento; ?>/>
			    <input type="hidden" name="today" value="javascript: new Date()"/>
			    <h3 class="fs-subtitle">Foto de Perfil</h3>
			    <input type="file" name="img" value=<?php echo $profile_photo; ?>/>
			    <input type="submit" name="submit" class="submit action-button" value="Confirmar" />
			  </fieldset>
		</form>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

        <script src="js/index_cad_user.js"></script>

    
    
  </body>
</html>
