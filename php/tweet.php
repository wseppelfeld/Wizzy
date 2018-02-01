<?php
						include 'conection.php';
					    if(isset($_POST['by']) && isset($_POST['poste']))
					    {
							$sql = 'INSERT INTO tweet VALUES( "id" , "'.$_POST['by'].'" , "'.$_POST['poste'].' " )';
						 	mysqli_query($conn,$sql);
						} 

						$sql = 'SELECT * FROM tweet ORDER BY `id` DESC  ';
					   	$rqt = mysqli_query($conn,$sql);
					   	
					   	while($data = mysqli_fetch_array($rqt))
					   	{
						   	echo '<strong>ID:</strong>   '.$data['id'].'<br/>';
						   	echo $data['poste'].'<br><strong> Par: </strong>'.$data['by'].'<table colapse=colapse><tr><td>';
						   	echo "<form action=modifier.php method=post><input type=submit value=modifier /></form></td><td> ";
						   	echo "<form action=index.php method=post><input type=submit  name=supprimer value=supprimer /></form></td></tr></table>";
					   
					     	if(isset($_POST['supprimer'])) 
					    	{
					   			$sql='DELETE FROM tweet WHERE `by` = "'.$data['by'].'" ';
					   			mysqli_query($conn,$sql);
					   		}
					   
					    	echo "<hr>";
					   	}
					   
					   	mysqli_free_result ($rqt);
					   	mysqli_close($conn);
?>