<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?
	function mostrarNumero(){
		echo ("Número 2345");	
	}
	mostrarNumero();
	
	
	echo"<hr>";
	
	function division($mostrar, $recuerda=6){
		echo ("la division de  $mostrar / $recuerda\n da como resultado\n".($mostrar / $recuerda));
		
	}
	
	division(23434, 34545);
	
	echo"<hr>";
	echo"<hr>";
	//
	function comprobarArgumentos(){
	//Uso de func_num_args()  numero de argumentos
		$numDeArgumentos=func_num_args();
		echo ("<u>Uso de func_num_args().</u><br>");
		echo ("El número de argumentos es $numDeArgumentos<br>");
		
		echo"<hr>";	
		
	//Uso de func_get_arg()  Obtiene un argumento en específico
		echo ("<u>Uso de func_get_arg().</u><br>");
		for ($i=0; $i<$numDeArgumentos; $i++){
			$argumento=func_get_arg($i);
			echo ("El argumento $i tiene el valor $argumento | ".gettype($argumento)."<br>");
		}
	
		echo"<hr>";
	
	//Uso de func_get_args	Obtiene un arreglo de argumentos
		echo ("<u>Uso de func_get_args().</u><br>");
		$matrizDeArgumentos=func_get_args();
		for ($i=0; $i<$numDeArgumentos; $i++){
			
			$argumento=$matrizDeArgumentos[$i];
			echo("El argumeto $i tiene el valor $argumento<br>");	
		}

		echo"<hr>";
		
	//Uso de func_get_args con foreach
		echo ("<u>Uso de func_get_args().</u><br>");
		$matrizDeArgumentos=func_get_args();
		foreach ($matrizDeArgumentos as $i => $argumento){
			
			
			echo("El argumeto $i tiene el valor $argumento<br>");	
		}
	}
	$varibale1=1;
	$variable2="Hola";
	$variable3="Adiós";
	
	
	comprobarArgumentos($varibale1, $variable2, $variable3);
	
	
	echo"<hr>";
	echo"<hr>";
	
	//Retorno de una funcion
	
	function cuadrado($a1){
		$a1*=$a1;
		$R = $a1;
		return $R;
		
	}
	$numero = 3;
	$cuadrado=cuadrado($numero);
	echo ("El cuadrado del número $numero es $cuadrado");
	
	
	
	//Funciones lamda en dond una variable se almacena una funcion.
	
	$lamda = function (){ echo "\nWEBOS!";};

	$lamda();
	



	
?>
</body>
</html>