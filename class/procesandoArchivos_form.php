<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?
	/*depuración
	
	print_r($_FILES);
	die;
	
	*/
	
	
	$archivoRecibido = $_FILES['fichero']['tmp_name'];
	$destino = "archivosRecibidos/fotoDelUsuario.jpg";
	move_uploaded_file ($archivoRecibido, $destino);
	
	
	//comprobando si el archivo tiene un formato adecuado
	if ($_FILES['fichero']['type'] == "image/pjpeg") {
		echo "El Fichero no tiene un formato adecuado";
	}else{
		echo "El Fichero tiene el formato adecuado";
	}
	
	echo "<hr>";
	
	//comprobando si el archivo tiene el tamaño adecuado
	if ($_FILES['fichero']['size'] < 200000){
		echo "Fichero demasiado grande";
	}else{
		echo "Fichero grabado correctamente";	
	}

	echo "<hr>";
	
	//comprobando si no tiene errores el archivo
	if ($_FILES['fichero']['error'] != 0){
		echo "Hay un error";
	}else{
		echo "No hay errores";
	}
?>
</body>
</html>