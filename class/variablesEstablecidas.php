<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?
	//para quitar los errores de el archivo "ini"
	ini_set('display_errors', 'Off');

	//
	echo "isset () con \$variable_1 es:".isset ($variable_1)."<br>";
	
	$variable_1="HOLA";
	echo "Ahora el resultado de isset() con \$variable_1 es:".isset ($variable_1)."<br>";
	
	echo "<br>";
	
	//Variables Eliminadas
	$variable_2="ADIOS";
	echo "El tipo de \$variable_2 es:".gettype ($variable_2)."<br>";
	
	unset($variable_2);
	echo "Ahora el tipo de \$variable_2 es:".gettype ($variable_2)."<br>";
	
	echo "<br>";
	
	//variables vacias
	echo "Ahora el resultado de empty() con \$variable_3 es:".empty ($variable_3)."<br>";
	
	$variable_3="Buenas las tenga usted";
		
	echo "Ahora el resultado de empty () con \$variable_3 es".empty ($variable_3);
	
?>
</body>
</html>