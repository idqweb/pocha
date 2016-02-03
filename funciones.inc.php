<?php
function calculapuntos ($pedidas,$acertadas){
		$puntos;
			
			if ($pedidas == $acertadas)
					$puntos = 10 +(5*$acertadas);
			
			if ($pedidas > $acertadas)
					$puntos = 5*($acertadas-$pedidas);
			
			if ($pedidas < $acertadas)
					$puntos = 5*($pedidas-$acertadas);
	
	
	return $puntos;
}

function calculageneral ($jugador,$puntosronda){
		
		$sumatotal="totalpuntos".$jugador;	
	
		$_SESSION[$sumatotal] = $_SESSION[$sumatotal]	+ $puntosronda;
			
		$puntos = $_SESSION[$sumatotal];
	
		return $puntos;	
}




function porcentaje($cantidad,$porciento,$decimales){
return number_format($cantidad*$porciento/100 ,$decimales);
}
?>