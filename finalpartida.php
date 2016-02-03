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
			
			<?php include("cabecera.inc.php"); ?>
			<?php  include 'funciones.inc.php'; ?>
			
			<?php
				$ronda = $_SESSION['ronda'];
				$rondaanterior = $_SESSION['ronda'] -1;
					

					echo "<h2>Posiciones Finales</h2>";
				
				$posicion = 1;

				arsort($_SESSION['puntuaciongeneral']);
							foreach ($_SESSION['puntuaciongeneral'] as $jugador => $puntos){
								echo "<h3>$posicion.º ).$jugador</h3>";
								$posicion++;
							}
				
			?>
			
			
			<h4>¿A cuanto asciende la BROMA?</h4>
			<div class="row">
				<div class="col-xs-6 col-md-4">
						<form name="pagar" method="post" action="finalpartida.php">
							<div class="form-group">
							  <label class="control-label">Clavada</label>
							  <div class="input-group">
								<span class="input-group-addon">€</span>

								<input class="form-control" type="text" name="precio" />

								<span class="input-group-btn">
								  <button class="btn btn-default" type="submit">Pagar</button>
								</span>
							  </div>
							</div>
						</form>
			</div>
			</div>
			
			<?php
					if (isset ($_POST['precio'])){
						$precio=$_POST['precio'];
					
				?>
			
			
			
			
			
			
			<?php
				
				$numerojugadores = count($_SESSION['puntuaciongeneral']);
				$pagadores = ceil($numerojugadores/2);


				if ($pagadores == 2){
			?>	
				El 60% es un total de <?=porcentaje($precio,60,2);?> €, calculado con 2 decimales. <br/>
				El 40% es un total de <?=porcentaje($precio,40,2);?> €, calculado con 2 decimales. <br/>
					
			<?php } ?>
			
			<?php
				if ($pagadores == 3){
			?>	
				El 50% es un total de <?=porcentaje($precio,50,2);?> €, calculado con 2 decimales. <br/>
				El 30% es un total de <?=porcentaje($precio,30,2);?> €, calculado con 2 decimales. <br/>
				El 20% es un total de <?=porcentaje($precio,20,2);?> €, calculado con 2 decimales. <br/>
					
			<?php } ?>
			
			<?php
				if ($pagadores == 4){
			?>	
				El 40% es un total de <?=porcentaje($precio,40,2);?> €, calculado con 2 decimales. <br/>
				El 30% es un total de <?=porcentaje($precio,30,2);?> €, calculado con 2 decimales. <br/>
				El 20% es un total de <?=porcentaje($precio,20,2);?> €, calculado con 2 decimales. <br/>
				El 10% es un total de <?=porcentaje($precio,20,2);?> €, calculado con 2 decimales. <br/>
					
			<?php }?>	
			
			
			
		<?php }	?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		</div>
	<!---------------- Comienza Footer ------------------->		
		<?php include("footer.php"); ?>
			
		
			
	</body>
</html>