<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <title>Wizzy - Criar place</title>
        
    <link rel="stylesheet" href="css/reset_checkin.css">
	<link rel="stylesheet" href="css/style_checkin.css">    
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
		<form id="msform" action="php/criar_place_op.php" method="POST">
			<fieldset>
				<h2 class="fs-title">Criar local</h2>
				<h2 style="color: #A9A9A9" style="margin-bottom: 10px;">Lat: <?php echo $_SESSION['latitude']; ?> : Lon: <?php echo $_SESSION['longitude']; ?></h2>
				<input type="text" name="local" placeholder="Digite o nome do seu local..."/>
				<input type="submit" name="submit" class="submit action-button" value="Confirmar" />
			</fieldset>
		</form>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjj_kOKmqvtT-g7txUN5L3gu4czRKWSy4"></script>
	    <script src="js/index_checkin.js"></script>
	</body>
</html>
