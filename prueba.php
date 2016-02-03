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
			
	</head>
	<body>
		
		<!---------------- Includes ------------------->
		
		
				
		<div class="container">
<?php  include 'funciones.inc.php'; ?>
			
			<?php
				
				//$precio=$_POST['precio'];
				$numerojugadores =3;
				$pagadores = ceil($numerojugadores/2);
				$precio=10;

				echo "$pagadores";
			
			
			
			?>
			
			<?php
				


				if ($pagadores == 2){
			?>	
				El 60% es un total de <?=porcentaje($precio,60,2);?>, calculado con 2 decimales. <br/>
				El 40% es un total de <?=porcentaje($precio,40,2);?>, calculado con 2 decimales. <br/>
					
			<?php } ?>
			
			<?php
				if ($pagadores == 3){
			?>	
				El 50% es un total de <?=porcentaje($precio,50,2);?>, calculado con 2 decimales. <br/>
				El 30% es un total de <?=porcentaje($precio,30,2);?>, calculado con 2 decimales. <br/>
				El 20% es un total de <?=porcentaje($precio,20,2);?>, calculado con 2 decimales. <br/>
					
			<?php } ?>
			
			<?php
				if ($pagadores == 4){
			?>	
				El 40% es un total de <?=porcentaje($precio,40,2);?>, calculado con 2 decimales. <br/>
				El 30% es un total de <?=porcentaje($precio,30,2);?>, calculado con 2 decimales. <br/>
				El 20% es un total de <?=porcentaje($precio,20,2);?>, calculado con 2 decimales. <br/>
				El 10% es un total de <?=porcentaje($precio,20,2);?>, calculado con 2 decimales. <br/>
					
			<?php } ?>	
			
			
			
		</div>
	<!---------------- Comienza Footer ------------------->		
		<?php include("footer.php"); ?>
			
		
			
	</body>
</html>