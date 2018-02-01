<?php
	session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Wizzy - Login</title>
    
    <link rel="stylesheet" href="css/reset_login.css">
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <style type="text/css">
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
		.menu{
			  width: 100%; 
			  padding: 3px; 
			  color: #660066; 
			  margin: 0 auto; 
			  margin-top: 10px;
			  font-size: 15px;
			      border-width: 3px;
			    border-style: solid;
			    -webkit-border-image: 
			      -webkit-gradient(linear, 0 0, 0 100%, from(black), to(rgba(0, 0, 0, 0))) 1 100%;
			    -webkit-border-image: 
			      -webkit-linear-gradient(black, #660066) 1 100%;
			    -moz-border-image:
			      -moz-linear-gradient(black, #660066) 1 100%;    
			    -o-border-image:
			      -o-linear-gradient(black, #660066) 1 100%;
			    border-image:
			      linear-gradient(to bottom, black, #660066) 1 100%;
					}
    </style>
  </head>

  <body>
		<form id="msform" action="php/login.php" method="POST" enctype="multipart/form-data">
			 <fieldset>
			    <h2 class="fs-title">Menu</h2>
			    <h2 style="color: #A9A9A9" style="margin-bottom: 10px;">Bem vindo - <?php echo $_SESSION['nome']; ?></h2>
			  	<img src="https://love2d.org/w/images/9/9b/Love-game-logo-256x256.png" />
			     <p><a href="#">About</a></p>
			    <div class="menu">
			    	<a href="alter_user.php"><i class="fa fa-user fa-3x" aria-hidden="true"></i></a>
			    	<a href="checkin.php"><i class="fa fa-map-marker fa-3x" aria-hidden="true"></i></a>
			    	<a href="chat.php"><i class="fa fa-users fa-3x" aria-hidden="true"></i></a>
			    	<a href="tweet/index.php"><i class="fa fa-commenting-o fa-3x" aria-hidden="true"></i></a>
			    	<a href="php/logoff.php"><i class="fa fa-sign-out fa-3x" aria-hidden="true"></i></a>
			    </div>
			  </fieldset>
		</form>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

        <script src="js/index_login.js"></script>

    
    
  </body>
</html>
