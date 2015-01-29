<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<form action="ejercicioFichero.php" method="post" name="file_up" id="file_up" enctype="multipart/form-data">
		
        Enviar un Fichero:
        
        <input type="file" name="fichero" id="fichero">
        <br>
        <input type="submit" name="enviar" id="enviar">
	</form>
    
<?

//	print_r($_FILES);
//	die;
	

	if(!empty ($_FILES)) {	
	
		move_uploaded_file ($_FILES['fichero']['tmp_name'], "archivosRecibidos/fotoDelUsuario.jpg");
		echo "Fichero grabado";

	}


	
	
	
?>
</body>
</html>