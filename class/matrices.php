<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?
	$names = array("Hans", "Sergio", "Esteban", "78", "Pepe", "Toño", "Juan");
	
	echo ($names[0]."<br>");
	echo ($names[1]."<br>");
	echo ($names[2]."<br>");
	echo ($names[3]."<br>");
	echo ($names[4]."<br>");
	echo ($names[5]."<br>");
	echo ($names[6]."<br>");
	//para añadir mas elementos a la matriz
	$names[]="Peter";
	echo ($names[7]."<br>");
	
	echo"<hr>";
	
	$nombres = array("Hans", "Sergio", "Esteban", "78", "Pepe", "Toño", "Juan");
	$indice=0;
	echo ($nombres[$indice]);
	
	echo"<hr>";
	//lo mismo pero con foreach sin "$key" ni "=>"
	 $jungry = array("Hans", "Sergio", "Esteban", "78", "Pepe", "Toño", "Juan");
	 foreach ($jungry as $valor){
		echo "$valor.<br>"; 
	 }
	 
	 echo"<hr>";
	 //lo mismo pero solo con foreach
	  $jungry = array("Hans", "Sergio", 50=>"Esteban", "78", 90=>"Pepe", "Toño", "Juan");
	 foreach ($jungry as $key => $valor){
		 echo "$valor es $key.<br>"; 
	 }
	 echo"<hr>";
	 //lo mismo pero solo con foreach, if y break
	  $jungry = array("Hans", "Sergio", 50=>"Esteban", "78", 90=>"Pepe", "Toño", "Juan");
	 foreach ($jungry as $key => $valor){
		 if($key == 50) break;
		echo "$valor es $key.<br>"; 
	 }
	 echo"<hr>";
	 //lo mismo pero solo con foreach,if y continue
	  $angry = array("Hans", "Sergio", 50=>"Esteban", "78", 90=>"Pepe", "Toño", "Juan");
	 foreach ($angry as $key => $valor){
		 if($key == 50) continue;
		echo "$valor es $key.<br>"; 
	 }
?>
</body>
</html>