<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?
	//uso de printf()
	$altura = "450";
	echo "Altura: ";
	printf("%2.10f", $altura);
	echo "\nmetros";
	
	echo "<hr>";
	
	//uso de sprinf()
	$precio1 = 68.75;
	$precio2 = 54.35;
	$precio = $precio1 + $precio2;
	echo "El valor de \$precio es de $$precio <br>";
	
	$formateado = sprintf("%.2d $", $precio);
	echo "El mismo valor formateado es $formateado";
	
	echo "<hr>";
	
	echo "<u>TABLA DE GASTO DE COMBUSTIBLE</u><br>";
	$formato = "%'_7d * %'_3d = %'_3d <br>";
	echo "L/diarios - Días - Total<br>";
	for ($dia=1; $dia<=15; $dia++){
		printf($formato, 17, $dia, $dia*17);	
	}
	
?>
</body>
</html>