<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>  
  
<?php
	echo "La opción elegida es:\n $_POST[sector]<br>";
	$sectores=array("Eletrcicistas", "Plomeros", "Transportistas", "Aseguradores", "Programadores");
	echo "El valor elegido es:\n".$sectores[$_POST['sector']];
?>
</body>
</html>