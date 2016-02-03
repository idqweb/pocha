<?php @ob_start();session_start();?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Retrasa Ronda</title>
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

			$mesa=$_SESSION['mesa'];
			$rondaaeliminar= $_SESSION['ronda'] -1;
			$puntuacionronda="puntuacion".$rondaaeliminar;
			/*
			for ($k=0;$k < count($mesa);$k++){
				array_pop($_SESSION[$puntuacionronda]);	
			}*/
				
			//Pongo a 0 los totales de todos los jugaores
			foreach ($mesa as $jugador){
					$sumatotal="totalpuntos".$jugador;	
					$_SESSION[$sumatotal]=0;
			}
			//Recortro todas las rondas	Recalculando puntos	
					for ($k=0;$k < $rondaaeliminar;$k++){
						$ronda = $k;
						$puntuacionronda="puntuacion".$ronda;
						foreach ($_SESSION[$puntuacionronda] as $jugador => $puntos){
							$puntosgeneralisima[$jugador] = calculageneral($jugador,$puntos);
							
						}
					}
					
				
										

			$_SESSION['puntuaciongeneral'] = $puntosgeneralisima;
				
			//////////////////////////////////////////////////////////////////////













			
			// retrasa RONDA

			if (isset ($_SESSION['ronda']) && $_SESSION['ronda'] > 1)
					$_SESSION['ronda'] = $_SESSION['ronda'] -1;
			
				
			
			//para saber quien reparte
			if($_SESSION['letocadar'] == 0)
				   	$_SESSION['letocadar'] = count($_SESSION['mesa'])-1;
			else
				$_SESSION['letocadar']= $_SESSION['letocadar']-1;
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