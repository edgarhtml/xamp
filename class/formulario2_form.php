<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

print_r($_FILES);

	$archivoRecibido = $_FILES["fichero"]["tmp_name"];
	$destino = "archivos/".$_FILES["fichero"]["name"];
	move_uploaded_file ($archivoRecibido, $destino);
	echo "Fichero grabado";

	echo "<hr>";
	echo "<hr>";

	foreach ($_FILES['fichero'] as $clave => $valor){
		echo "Propiedad: $clave ---- Valor: $valor <br>";
		
	}
/*	
	echo "<hr>";
	echo "<hr>";

	echo "El nombre de usuario es:".$_POST["nombre"]."<br>";
	echo "¿El usuario es solter@?:".$_POST['soltero']." <br>";
	echo "El rango de edad de usuario es: ".$_POST['edad']." <br>";
	echo "La fecha de nacimiento es:".$_POST['$fecha']."<br>";
	echo "El dato oculto escrito es:".$_POST['datoOculto']."<br>";
	echo "La contrasena es:".$_POST['contraseña']."<br>";
*/
?>
</body>
</html>