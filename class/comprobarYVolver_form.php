<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?

//print_r($_FILES);
//die;
	


	 
	 $error = false;
	 
	//comprobando si el archivo tiene un formato adecuado
	if ($_FILES['fichero']['type'] != "image/pjpeg") {
		$error = true;
	}
	
	//comprobando si el archivo tiene el tamaño adecuado
	if ($_FILES['fichero']['size'] > 200000){
		$error = true;
		
	}
	
	//comprobando si no tiene errores el archivo
	if ($_FILES['fichero']['error'] != 0){
		$error = true;
	
	}
	
	//si se ha producido algun error se vuelve al formulario inicial
	if ($error == true){
		echo ("<script language='javascript' type='text/javascript'>");
		echo ("location.href ='comprobarYVolver.php';");
		echo ("</script>");
	}

	//se intenta grabar y comprobar si graba bien.
	$archivoRecibido = $_FILES['fichero']['tmp_name'];
	$destino = "archivosRecibidos/fotoDelUsuario.jpg";
	
	if (move_uploaded_file ($archivoRecibido, $destino)){
		echo "Fichero grabado";	
	}else{
		echo "El Fichero no se ha podido grabar";	
	}
	
	
?>
</body>
</html>