<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?
	$cadena = "Esto es una cadena";
	$mayus = strtoupper($cadena);
	$minus = strtolower($cadena);
	echo "La cadena original es: $cadena <br>";
	echo "Todo en mayúsculas es: $mayus <br>";
	echo "Todo en minúsculas es: $minus <br>";
	
	echo "<hr>";
	
	//ucfirst() convierte la primera letra en mayúscula de la cadena deseada
	
	//ucwords() convierte la primera letra de cada palabara a mayúscula
	$cadenaNueva ="esto es una nueva cadena";
	$mayus1 = ucfirst($cadenaNueva);
	$mayus2 = ucwords($cadenaNueva);
	
	echo "La cadena original es: $cadenaNueva <br>";
	echo "El efecto de ucfirst es: $mayus1 <br>";
	echo "El efecto de ucwords es: $mayus2";
	
	echo "<hr>";
	//para reemplazar unos carácteres por otros y dejar in alterados los demas carácteres se utiliza la función str_replace
	
	$cadenaOriginal = "Mi mesa es blanca y tu mesa es negra.";
	echo "Esta es la cadena original: $cadenaOriginal <br>";
	$cadenaModificada = str_replace("mesa", "silla", $cadenaOriginal);
	echo "La cadena modificada es: $cadenaModificada";
	
	echo "<hr>";
	//esto es para cambiar una
	
	
?>
</body>
</html>