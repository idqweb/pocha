<?php @ob_start();session_start();?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Calculos Ronda</title>
	<!-- Los estilos css de Bootstrap -->
		<link rel="stylesheet" href="./css/bootstrap.css"/>
	<!-- Mis estilos css PERSONALIZADOS -->
		<link rel="stylesheet" href="./css/estilos.css"/>
	
	<!-- ******************** carga de javascripts *********************** -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="./js/jquery-2.1.4.min.js"></script>
		<!-- el que viene compilado -->
		<script src="./js/bootstrap.min.js" ></script>	
		<!-- para botones -->
		 <script src="js/incrementing.js"></script>
			
	</head>
	<body>
		
		<!---------------- Includes ------------------->
		<?php  include 'funciones.inc.php'; ?>
		
		<?php
			
			// calculos de la ronda
			$pedidas = $_POST['pedidas'];
			$acertadas = $_POST['acertadas'];


			//creo el array de la Ronda
					
			$pos=0;
			
			
			foreach ($_SESSION['mesa'] as $jugador){
					$puntosronda[$jugador] = calculapuntos ($pedidas[$pos],$acertadas[$pos]);
					$pos++;
				}

			//Nombre del array de la ronda	
				$puntuacionronda="puntuacion".$_SESSION['ronda'];			

				$_SESSION[$puntuacionronda] = $puntosronda;
			////////////////////////////////////////////////////////////////////////
			

			//CREO UN ARRAY ASOCIATIVO QUE ASOCIA EL JUGADOR CON SUS PUNTOS TOTALES y llama a una funcion
				foreach($puntosronda as $jugador => $puntos){
					
					$puntosgeneralisima[$jugador] = calculageneral($jugador,$puntos); 
					
				}
				
										

			$_SESSION['puntuaciongeneral'] = $puntosgeneralisima;
				
			//////////////////////////////////////////////////////////////////////



				
			// pasar de ronda y volver
				$_SESSION['ronda'] = $_SESSION['ronda'] + 1;
				
			
			//para saber quien reparte
			$_SESSION['letocadar']= $_SESSION['letocadar']+1;
			if($_SESSION['letocadar'] == count($_SESSION['mesa']))
				   	$_SESSION['letocadar'] = 0;
			//******************************************

		
		
			if ($_SESSION['ronda'] <=	$_SESSION['maxronda'])
				header('Location: ronda.php');
			else
				header('Location: finalpartida.php');
			
 			
		?>
				
		<div class="container">
			
			
		</div>
	<!---------------- Comienza Footer ------------------->		
		<?php include("footer.php"); ?>
			
		
			
	</body>
</html>