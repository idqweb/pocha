<?php @ob_start();session_start();?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Partida Pocha</title>
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
		<?php
			
			$_SESSION['players']=$_POST['jugador'];
		?>
				
		<div class="container">
			
			<?php include("cabecera.inc.php"); ?>
			<br/><br/>
				<a href="logout.php" class="btn btn-danger">DESTRUYE LA PARTIDA (NO PULSAR)</a>
			<br/><br/>
			
			
			
			<?php
				$jugador= $_SESSION['players'];
				$reparte_player = array_rand($jugador);
		
		echo "<h1>Posiciones en la MESA:  </h1>";
		
		
		?>
			<br/>
			<h3>Comienza repartiendo cartas <?php echo $jugador[$reparte_player]; ?></h3>
			<br/>
			
			
			Coloca a los jugadores segun sus posiciones(0=repartidor y correlativos 1,2,3...)
			
			<br/><br/>
			
			<form name="defineronda" method="post" action="ronda.php">
				<?php
					foreach ($jugador as $player){
						echo "$player  <input type='text' name='$player' id='$player' /><br/><br/>";
					}
				?>
				<input type="submit" class="btn btn-success btn-lg" id="submit" value="Comienza" />
				
			</form>
		
			
			
		
		</div>
	<!---------------- Comienza Footer ------------------->		
		<?php include("footer.php"); ?>
			
		
			
	</body>
</html>