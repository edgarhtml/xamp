<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<script language="javascript" type="text/javascript">
		function volver(){
			location.href = 'volverPorFuncion.php';	
		}
	</script>
</head>

<body>
<?
 $error = false;
	 
	//comprobando si el archivo tiene un formato adecuado
	if ($_FILES['fichero']['type'] == "image/pjpeg") {
		echo "El archivo no esta en el formato adecuado.";
		$error = true;
	}
	
	//comprobando si el archivo tiene el tamaño adecuado
	if ($_FILES['fichero']['size'] < 200000){
		echo "El archivo es demasiado grande.";
		$error = true;
		
	}
	
	//comprobando si no tiene errores el archivo
	if ($_FILES['fichero']['error'] != 0){
		echo "Hay un error en el archivo";
		$error = true;
	
	}
	
	//si hay un error vuelve al formulario inicial
	if ($error){
	echo ("<input type='button' name='retorno' id='retorno' value='VOLVER' onClick='javascript:volver();';");	
	}else{
		
		
	//se intenta grabar y se comprueba si graba bien
	$archivoRecibido = $_FILES['fichero']['tmp_name'];
	$destino = "archivosRecibidos/fotoDelUsuario.jpg";
	
	if (move_uploaded_file ($archivoRecibido, $destino)){
		echo "Fichero grabado";	
	}else{
		echo "El Fichero no se ha podido grabar";	
	}
		
	}
?>


</body>
</html>