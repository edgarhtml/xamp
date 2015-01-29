<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?
	$saludo="Hola, amigo";
	$saludoParaMostrar="saludo";
	$$saludoParaMostrar="fbgfgf";
	echo ($saludo."<br>");
	$saludo="Hello, fellow";
	echo ($$saludoParaMostrar."<br>");
	
	echo"<br>";
	
	$saludo="Hola, amigo";
	$saludoParaMostrar="saludo";
	
	echo ($$saludoParaMostrar."<br>");
	$saludo="Hello, fellow";
	echo ($$saludoParaMostrar."<br>");
?>
</body>
</html>