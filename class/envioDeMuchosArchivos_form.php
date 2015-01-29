<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?

/* pag. 117-119*/
/*Para depurar*/
	print_r($_FILES);
	die;

	define ("salto","<br>\n");
	
	$totalDeArchivos = count($_FILES['archivos']['tmp_name']);
		
		echo "El total de campos es de:".$totalDeArchivos.salto;
		
		for ($contador=0; $contador<$totalDeArchivos; $contador++){
			echo "<b>ARCHIVO $contador:</b>";
			
			if ($_FILES['archivos']['name']['$contador']==""){
				echo "NO EXISTE".salto;	
			
			}else{
				echo "\"".$_FILES['archivos']['name']['$contador']."\"".salto;	
			}
		}
?>
</body>
</html>