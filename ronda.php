<?php @ob_start();session_start();?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Ronda Pocha</title>
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
			
			if ($_SESSION['configurando']){
					// ordenacion final de los jugadores	
					foreach ($_SESSION['players'] as $nameplayer){
							$pos=$_POST[$nameplayer];
							$mesacompleta[$pos]="$nameplayer";
							$sumatotal="totalpuntos".$nameplayer;	
							$_SESSION[$sumatotal]=0;
					}

					$_SESSION['mesa'] = $mesacompleta;
					$_SESSION['ronda']=1; // la ronda no comenzo
					$_SESSION['letocadar']=0; //para saber quien da
					//los array de  puntaciones a 0 pero como arrays asociativos configuracion inicial
						foreach ($mesacompleta as $jugador){
										$puntuaciongeneral[$jugador] = 0;
										$puntuacionronda[$jugador] = 0;
									}


					$_SESSION['puntuaciongeneral']= $puntuaciongeneral;
						
					$rondaanterior = $_SESSION['ronda'] -1;
				
					$numeroronda="puntuacion$rondaanterior";			

					$_SESSION[$numeroronda] = $puntuacionronda;	
					
					

					$_SESSION['configurando'] = false;
			}
			else{
				$rondaanterior = $_SESSION['ronda'] -1;
				
								
			}


				$mesacompleta	= $_SESSION['mesa'];
				$cartasmaximo =  40/count($mesacompleta);
				$cartasmaximo = (int) $cartasmaximo;
				$maximorondas = 5*count($mesacompleta)+2*($cartasmaximo-2);
				 $_SESSION['maxronda']= $maximorondas;
				$ronda = $_SESSION['ronda'];
				$letocadar = $_SESSION['letocadar'];	
				
		?>
				
		<div class="container">
			
			
			<?php include("cabecera.inc.php"); ?>
			
			
			<?php
    	if (isset($_POST['pedidas'])) {
    		echo '<div style="border:1px solid #fc0; padding:10px;margin-top:25px;">';
    		echo 'The values returned were:  '.implode(', ',array_values($_POST));
    		echo '</div>';
    	}
   			 ?>
			
			
			<h1>RONDA <?php echo $_SESSION['ronda'];?>/<?php echo $maximorondas; ?> </h1>
			<br/>
			
			<h3>Le Toca repartir cartas a:<?php echo $mesacompleta[$letocadar];?></h3>
			<br/><br/>
			
			<div class="botonatras">
				<a href="retrasaronda.php" class="btn btn-warning">Volver a Ronda Anterior</a>
			</div>
						
			<form  method="post" action="calculosronda.php" id="puntuaciones">
 				<fieldset>
    				<legend>Puntuaciones de la Ronda</legend>
					<?php
							//crear tantos como jugadores existan
							foreach ($mesacompleta as $jugador){
					?>
							<div class="formulariopuntos">
							  <label for="name"><?=$jugador?></label>
							 <div class="numbers-row">
								 <label>Pedidas</label>
								<input class="form-control" name="pedidas[]"  type="text" value="0" />
							  </div>
								<div class="numbers-row">
									<label>Hechas</label>
								<input class="form-control" name="acertadas[]" type="text" value="0"/>
							  </div>
							</div>
					<?php	
							}
						?>	
					
			
			
			
					 <div class="form-group">
			  		<div class="col-lg-10 col-lg-offset-2">
				<button type="reset" class="btn btn-default">Cancel</button>
				<button type="submit" class="btn btn-primary">Enviar Puntos</button>
			  </div>
			</div>
		  </fieldset>
		</form>
			
			
			
			
			
			
			
			
		<?php 
			if ( $ronda > 1){
		?>
			<h2>Tabla general de puntuaciones</h2>

			<table class="table table-striped table-hover ">
				<thead>
					
					<tr>
						<?php 
							arsort($_SESSION['puntuaciongeneral']);
							foreach ($_SESSION['puntuaciongeneral'] as $jugador => $puntos){
								echo "<th>$jugador</th>";
							}
						?>		
					</tr>			
				</thead>
				
				<tbody>
    				
					<tr class="info">
					  <?php 
							arsort($_SESSION['puntuaciongeneral']);
							foreach ($_SESSION['puntuaciongeneral'] as $jugador => $puntos){
								echo "<th>$puntos</th>";
							}
	
							
						?>		
					</tr>
				</tbody>
			</table>
			
		<?php }	?>		
			
			
			
			<?php 
			if ( $ronda > 1){
			?>
			
			<h2>Puntos Por Ronda</h2>
				
					
			
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>Ronda</th>
						<?php 
							foreach ($_SESSION['mesa'] as $jugador){
								echo "<th>$jugador</th>";
							}
						?>		
					</tr>			
				</thead>
				<?php for ($k=1;$k <= $rondaanterior;$k++){  ?>
				<tbody>
    				
					<tr class="info">
						<td><?php echo $k; ?></td>
						<?php 
															  
												
							$numeroronda="puntuacion".$k;
													   
						 														   
						foreach ($_SESSION[$numeroronda] as $jugador => $puntos){
								echo "<td>$puntos</td>";
								
							}
	
							
						?>		
					  
					</tr>
					
				</tbody>
				<?php } ?>	
			</table>
			
			
			<?php }	?>
			
			
		
		</div>
	<!---------------- Comienza Footer ------------------->		
		<?php include("footer.php"); ?>
			
		
			
	</body>
</html>