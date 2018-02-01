<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <title>Wizzy - Checkin</title>
        
    <link rel="stylesheet" href="css/reset_checkin.css">
	<link rel="stylesheet" href="css/style_checkin.css">    
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
		<form id="msform" action="php/checkin_operation.php" method="POST" >
			<fieldset>
				<h2 class="fs-title">Checkin</h2>
				<h2 style="color: #A9A9A9" style="margin-bottom: 10px;">Dê seu checkin <?php echo $_SESSION['nome']; ?> ;) </h2>
				<div id="map"></div>
				<input type="button" name="check" value="Descobrir localização" onclick="descobre_geo()"/>
				<input type="hidden" name="checkin-lat" value="-23.62" />
				<input type="hidden" name="checkin-lon" value="-46.69" />
				<input type="submit" name="submit" class="submit action-button" value="Checkin" />
			</fieldset>
		</form>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjj_kOKmqvtT-g7txUN5L3gu4czRKWSy4"></script>
	    <script src="js/index_cad_user.js"></script>
	    <script src="js/funcoes_checkin.js"></script>
	</body>
</html>
