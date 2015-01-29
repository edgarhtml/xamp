

<?
	//vamos a ver q sucede con esta codificacion
	$cadenaNuevaOriginal = "INÉS SÁNCHES es Técnica en Electrónica. <br>";
	echo $cadenaNuevaOriginal;
	$cadenaNuevaModificada = strtr($cadenaNuevaOriginal, "ÁÉÍÓÚáéíóú", "AEIOUaeiou");
	echo $cadenaNuevaModificada;
	
?>
