<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Wizzy - Login</title>
    
    <link rel="stylesheet" href="../css/reset_login.css">
    <link rel="stylesheet" href="../css/style_login.css">
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
		<form id="msform" action="login_op.php" method="POST" enctype="multipart/form-data">
			 <fieldset>
			    <h2 class="fs-title">Login - Administrativo</h2>
			    <input type="email" name="email" placeholder="Digite seu Email" />
			    <input type="password" name="pass" placeholder="Digite sua Senha" />
			    <input type="submit" name="submit" class="submit action-button" value="Login" />
			  </fieldset>
		</form>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

        <script src="../js/index_login.js"></script>

    
    
  </body>
</html>
