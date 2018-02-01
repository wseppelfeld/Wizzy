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
			    <h2 class="fs-title">Criar Sua Conta</h2>
			    <input type="email" name="email" placeholder="Email" />
			    <input type="password" name="pass" placeholder="Senha" />
			    <input type="password" name="cpass" placeholder="Confirme a Senha" />
			    <input type="button" name="next" class="next action-button" value="Proximo" />
			  </fieldset>
			  <fieldset>
			    <h2 class="fs-title">Perfil</h2>
			    <h3 class="fs-subtitle">Não iremos vender suas informações</h3>
			    <input type="text" name="name" placeholder="Nome" />
			    <input type="text" name="username" placeholder="Defina seu Username" />
			    <input type="button" name="previous" class="previous action-button" value="Anterior" />
			    <input type="button" name="next" class="next action-button" value="Proxima" />
			  </fieldset>
			  <fieldset>
			    <h2 class="fs-title">Informações Pessoais</h2>
			    <h3 class="fs-subtitle">Sexo</h3>
			    <label>
			      <select id="sexo" name="sexo">
			      	<option value="M">Masculino</option>
			        <option value="F">Feminino</option>
			      </select>
			     </label>
			    <h3 class="fs-subtitle">Data de Nascimento</h3>
			    <input type="date" name="bday"/>
			    <input type="hidden" name="today" value="javascript: new Date()"/>
			    <h3 class="fs-subtitle">Foto de Perfil</h3>
			    <input type="file" name="img"/>
			    <input type="submit" name="submit" class="submit action-button" value="Confirmar" />
			  </fieldset>
		</form>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

        <script src="js/index_cad_user.js"></script>
    
  </body>
</html>
