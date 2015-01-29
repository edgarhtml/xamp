<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
        <form action="envioDeMuchosArchivos_form.php" method="post" enctype="multipart/form-data">
            <input name="archivos[]" type="file"><br>
            <input name="archivos[]" type="file"><br>
            <input name="archivos[]" type="file"><br>
            <input name="archivos[]" type="file"><br>
   
            <hr>
            <input type="submit" name="submit" id="submit" value="enviar">		
	
   
</body>
</html>