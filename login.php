<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Wizzy - Login</title>
    
    <link rel="stylesheet" href="css/reset_login.css">
    <link rel="stylesheet" href="css/style_login.css">
    <style>
    	.a_link {
    		margin-top: 10px;
			margin-bottom: 10px;
    	}
    	a, a:visited {
			color:#660066;
			text-decoration:none;
			outline:none;
		}

		a:hover{
			text-decoration:underline;
		}

		a img{
			border:none;
		}
    </style>
  </head>

  <body>
		<form id="msform" action="php/login.php" method="POST" enctype="multipart/form-data">
			 <fieldset>
			    <h2 class="fs-title">Login</h2>
			    <img src="https://love2d.org/w/images/9/9b/Love-game-logo-256x256.png" />
			    <input type="email" name="email" placeholder="Digite seu Email" />
			    <input type="password" name="pass" placeholder="Digite sua Senha" />
			    <div class="a_link"><p><a href="cad_user.html">Criar conta</a></p></div>
			 	<img src="http://i.stack.imgur.com/ZW4QC.png" />
			 	<input type="hidden" name="metodo" value="0" />
			    <input type="submit" name="submit" class="submit action-button" value="Login" />
			  </fieldset>
		</form>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

        <script src="js/index_login.js"></script>

    
    
  </body>
</html>
