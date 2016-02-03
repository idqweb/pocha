<?php @ob_start();session_start();?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Apuntando Pocha</title>
	<!-- Los estilos css de Bootstrap -->
		<link rel="stylesheet" href="./css/bootstrap.css"/>
	<!-- Mis estilos css PERSONALIZADOS -->
		<link rel="stylesheet" href="./css/estilos.css"/>
		
		
	
		
	</head>
	<body>
<!---------------- Includes ------------------->

<?php $_SESSION['configurando']=true;?>
		
		<div class="container">
			
					
			<h1>PARTICIPANTES EN LA PARTIDA DE "POCHA"</h1>
			
			
			
			<form id="formularioPartida" name="formulariopartida" method="post" action="partida.php" >
				<label>POCHEROS</label><br/><br/>
				<div class="portada">
					<img class="img-circle" src="./images/roger.png" />
					<input type="checkbox" name="jugador[]" value="ISAAC" />ISAAC<br/>
				</div>
				<div class="portada">
					<img class="img-circle" src="./images/granada.png" />
					<input type="checkbox" name="jugador[]" value="MANUEL"/>MANUEL<br/>
				</div>
				<div class="portada">
					<img class="img-circle" src="./images/poker.png" />
					<input type="checkbox" name="jugador[]" value="ISIDRO" />ISIDRO<br/>
				</div>
				<div class="portada">
					<img class="img-circle" src="./images/dardos.png" />
					<input type="checkbox" name="jugador[]" value="FRE" />FRE<br/>
				</div>
				<div class="portada">
					<img class="img-circle" src="./images/bender.png" />
					<input type="checkbox" name="jugador[]" value="TATINAS" />TATINAS<br/>
				</div>
				<div class="portada">
					<img class="img-circle" src="./images/anonymous.png" />
					<input type="checkbox" name="jugador[]" value="GAVI" />GAVI<br/>
				</div>
				<div class="portada">
					<img class="img-circle" src="./images/darkvader.png" />
					<input type="checkbox" name="jugador[]" value="TIRONE" />TIRONE<br/>
				</div>
				<div class="portada">	
					<img class="img-circle" src="./images/tuna.png" />
					<input type="checkbox" name="jugador[]" value="GEORGE" />GEORGE<br/>
				</div>
				<div class="portada">
					<img class="img-circle" src="./images/maldad.png" />
					<input type="checkbox" name="jugador[]" value="MALDAD" />MALDAD<br/><br/>
  				</div>
				<div class="portada">
					<img class="img-circle" src="./images/chave.png" />
					<input type="checkbox" name="jugador[]" value="CHAVE" />CHAVE<br/><br/>
  				</div>
				<div class="portada">
					<img class="img-circle" src="./images/chini.png" />
					<input type="checkbox" name="jugador[]" value="CHINI" />CHINI<br/>
				</div>
				<div class="btnportada">
				<input type="submit" class="btn btn-success btn-lg" value="Comenzar" />
				</div>
			</form>
			
			<a href="pagar.php" class="btn btn-primary btn-lg">Calculos pago</a>
		</div>
		<!-- ********************* Comienza Footer  ******************************* -->		
			<?php include("footer.php"); ?>
			
		<!-- ******************** carga de javascripts *********************** -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="./js/jquery-2.1.4.min.js"></script>
		<!-- el que viene compilado -->
		<script src="./js/bootstrap.min.js" ></script>	
	</body>
</html>