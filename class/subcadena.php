<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<center>
<?
	//Funciones para manejo de datos.(pags 131-134)

	$cadenaDeTexto = "Esto es una cadena de texto";
	$fragmento = substr($cadenaDeTexto, 12, 6);
	//si no le pones el ultimo valor a substr() toma todo hasta el final
	$fragmentoDos = substr($cadenaDeTexto, 12);
	
	
	echo "La cadena original es '$cadenaDeTexto'.<br>";
	echo "Aplicamos 'substr (\$cadenaDeTexto, 12, 6)'.<br>";
	echo "El fragmento resultante es '$fragmento'.<br>";
	echo "El fragemnto 2:''$fragmentoDos";
	
	echo "<hr>";
	
	
	$cadena = "Esto es una nueva cadena de texto";
	echo "La cadena original es '$cadena' <br>";
	
	
	//para eliminar los espacios en blanco del PRINCIPIO de la cadena se unsa ltrim()
	echo "El reslutado de ltrim(\$cadena)".ltrim($cadena)."<br>";
	
	//para eliminar los espacios en blanco del FINAL usamos chop()
	echo "El reslutado de chop(\$cadena)".chop($cadena)."<br>";
	
	//para eliminar los del PRINCIPIO Y FINAL usamos trim()
	echo "El reslutado de trim(\$cadena)".trim($cadena)."<br>";
	
	
	
	echo "<hr>";
	
	
	$caracter = "C";
	$numerico = "130";
	$numericoDos = "131";
	
	//para obtener el codigo ASCII d un caracter se unsa ord()
	echo "El carácter '$caracter' (con mayúscula) tiene el código ASCII:\n".ord($caracter)."<br>";
	
	//recibe un valor numérico del 1 al 255 y devuelve el carácter. Esto hace chr()
	echo "El valor '$numerico' en código ASCII corresponde al carácter:\n".chr($numerico)."<br>";
	
	echo "El valor '$numericoDos' en código ASCII corresponde al carácter:\n".chr($numericoDos)."<br>";
	
	echo "<hr>";
	
	//para conocer el numero de carácteres que forman una cadena usamos strlen()
	
	$texto = "Mi libro de php";
	$longitud = strlen($texto);
	echo "La cadena '$texto' tiene $longitud de carácteres";
?>
</center>
</body>
</html>