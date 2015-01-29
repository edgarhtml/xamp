<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
		//variables globales
		ini_set('display_errors', 'Off');

	function cuadrado($valor){
		global $numero;
		$cuadrado=$valor*$valor;
		echo("El cuadrado de $valor es $cuadrado");	
		echo("La variable \$numero dentro de la funcion vale $numero y es de tipo".gettype($numero)."<br>");
	}
	
	$numero=3;
	cuadrado($numero);
		echo("La variable \$numero fuera de la funcion vale $numero y es de tipo".gettype($numero)."<br>");
		echo("La variable \$cuadrado fuera de la funcion vale $cuadrado y es de tipo".gettype($cuadrado)."<br>");
?>
</body>
</html>