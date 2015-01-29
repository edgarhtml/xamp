<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?
	//str_pad() se usa para rellenar con un algun signo las veces requeridas
	$cadena = "Esto es una cadena";
	$cadena = str_pad($cadena, 25, "+");
	
	echo "$cadena";
	
	//$cadena2 = STR_PAD_BOTH($cadena, 25, "+");
	 //echo "$cadena2";
	
	echo "<hr>";
	//la funcion str_repeat() repite una cadena
	$cadenaNueva = "*CADENA*";
	$cadenaNueva =str_repeat($cadenaNueva, 5);
	echo $cadenaNueva;
	 
	 
	 
?>
</body>
</html>