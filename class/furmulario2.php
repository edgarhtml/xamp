<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<center>
			<h1>Resuelve este formulario</h1>
			<br>
			<br>
			<br>
				
			<form  enctype="multipart/form-data" name="new_formulario" id="new_formulario"  action="formulario2_form.php" method="post">
            
            <!--- esto es para limitar el tamaño de subida de un archivo(en este caso una imagen) --->
            <input type="hidden" name"MAX_FILE_SIZE" value="">
				
                
              Sube tu foto:
        		<input type="file" name="fichero" id="fichero">
        
       			 <br>
        
       			
        
       			 
                 <hr>
				Teclee su nombre:
				
				<input type="text" name="nombre" id="nombre" value="">
				
				<hr>

				¿Es usted solter@?
				<input type="radio" name="soltero" id="soltero" value="si">
				<input type="radio" name="soltero" id="soltero" value="no">
				<hr>
				Seleccione su edad:
				<br>
				de 0 a 20 años:


				<input name="edad" type="radio" value="0 a 20 años">
				
				<br>
				de 21 a 40 años:
			
				<input name="edad" type="radio" value="21 a 40 años">
				<br>
				
				mas de 40 años:
				
				<input name="edad" type="radio" value="mas de 40 años ">
				<hr>
				Escribe tu fecha de nacimiento:
				<input name="fecha" type="date" id="fecha" value="fecha de nacimiento">
				<hr>
				<input name="datoOculto" type="hideen" id="datoOculto" value="Este dato es oculto">
				<hr>
				Escribe una contraseña:
				<input name="contraseña" type="password" id="contraseña" value="">
				<hr>
                
				
					 <input type="submit" value="ENVIAR" name="ok">
				

			 </form> 


</body>
</html>