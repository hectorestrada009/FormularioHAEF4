<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Tarea funciones </title>
</head>
<body>
	
	<div align="center">

	<h1> Función round() </h1> 

	<!-- Función round: Esta es una función que permite redondear la cantidad de un flotante o redondear el resultado decimal de una operación matematica -->

	<br>

	<h3> Ejemplo 1 </h3>

	<b> Se redondea 5.5 dando como resultado: </b>

	<br>
	<br>

	<?php 

	//Ejemplo nro. 1

	echo round(5.5);

	?>

	<br>
	<br>
	<br>
	<br>

	<h3> Ejemplo 2 </h3>

	<b> Se redondea hacia abajo 1.4 dando como resultado: </b>

	<br>
	<br>

	<?php  

	//Ejemplo nro. 2

	echo round(1.4, 0, PHP_ROUND_HALF_DOWN);

	?>

	<br>
	<br>
	<br>
	<br>

	<h3> Ejemplo 3 </h3>

	<b> Redondear 1.917 mostrando dos decimales: </b>

	<br>
	<br>

	<?php 

	//Ejemplo nro.3

	echo round(1.917, 2);

	 ?>

	<br>
	<br>
	<br>
	<br>	 

	
<h1> Función floor() </h1>

	<!-- Función floor(): redondea fracciones hacia abajo -->
	 
	 <br>

	 <h3> Ejemplo 1 </h3>

	 <b> Se redondea la fracción 2.29: </b>

	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 echo floor(2.29);


	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2 </h3>

	  <b> Se redondea la fracción -1.6: </b>

	  <br>
	  <br>

	  <?php 

	  echo floor(-1.6);

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3 </h3>

	  <b> Se redondea la fracción -20.40: </b>

	  <br>
	  <br>

	  <?php 

	  echo floor(-20.40);

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función ceil() </h1>

	<!-- Función ceil(): redondea fracciones hacia arriba -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Se redondea 7: </b>

	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 echo ceil(7); 

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Se redondea 7.1: </b>

	  <br>
	  <br>

	  <?php 

	echo ceil(7.1); 

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Se redondea -7.1: </b>

	  <br>
	  <br>

	  <?php 

	echo ceil(-7.1); 

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función rand() </h1>

	<!-- Función rand(): Genera numeros aleatorios -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Genera: </b>

	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $d=rand(1,30);
	 echo "$d"; 

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Genera: </b>

	  <br>
	  <br>

	  <?php 

	echo rand(20,100);

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Genera: </b>

	  <br>
	  <br>

	  <?php 

	echo rand(100,900);

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función strtoupper() </h1>

	<!-- Función strtopper(): Convierte a mayúsculas los caracteres de una cadena string -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Cambia "hector estrada" a: </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $cadena = "hector estrada";
	 $cadena_cambio = strtoupper($cadena);
	 echo "$cadena_cambio";

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Cambia "stranger things" a: </b>

	  <br>
	  <br>

	  <?php 

	echo strtoupper("stranger things");

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Cambia "new abnormal" a: </b>

	  <br>
	  <br>

	  <?php 

	echo strtoupper("new abnormal");

	   ?>

	   <br>
	<br>
	<br>
	<br>

	   <h1> Función strtolower() </h1>

	<!-- Función strtolower(): Convierte a minúsculas los caracteres de una cadena string -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Cambia "HOTEL CALIFORNIA" a: </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $cadena = "HOTEL CALIFORNIA";
	 $cadena_cambio = strtolower($cadena);
	 echo "$cadena_cambio";

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Cambia "WEEKEND" a: </b>

	  <br>
	  <br>

	  <?php 

	echo strtolower("WEEKEND");

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Cambia "NEW ABNORMAL" a: </b>

	  <br>
	  <br>

	  <?php 

	echo strtolower("NEW ABNORMAL");

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función ucfirst() </h1>

	<!-- Función ucfirst(): convierte a mayúscula la primera letra de una cadena de texto -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Cambia "hector estrada" a: </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $cadena = "hector estrada";
	 $cadena_cambio = ucfirst($cadena);
	 echo "$cadena_cambio";

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Cambia "starcourt" a: </b>

	  <br>
	  <br>

	  <?php 

	echo ucfirst("starcourt");

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Cambia "eleven" a: </b>

	  <br>
	  <br>

	  <?php 

	echo ucfirst("eleven");

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función ucwords() </h1>

	<!-- Función ucwords(): Convierte a mayúscula el primer caracter de cada palabra de una cadena de texto -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Cambia "hector estrada" a: </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $cadena = "hector estrada";
	 $cadena_cambio = ucwords($cadena);
	 echo "$cadena_cambio";

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Cambia "stranger things" a: </b>

	  <br>
	  <br>

	  <?php 

	echo ucwords("stranger things");

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Cambia "mike" a: </b>

	  <br>
	  <br>

	  <?php 

	echo ucwords("mike");

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función strlen() </h1>

	<!-- Función strlen(): Calcula la longitud de una cadena de texto (Numero de letras que hay en la cadena de texto) -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> La cadena "hector estrada" tiene éste número de letras: </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $cadena = "hector estrada";
	 $cadena_cambio = strlen($cadena);
	 echo "$cadena_cambio";

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> La cadena "stranger things" tiene éste número de letras: </b>

	  <br>
	  <br>

	  <?php 

	echo strlen("stranger things");

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> La cadena "I can't believe how much i hate pressures of a new place roll my 
	  	<br> 
	  way jumpsuit, jumpsuit, cover me" tiene este numero de letras: </b>

	  <br>
	  <br>

	  <?php 

	echo strlen("I can't believe how much i hate pressures of a new place roll my way jumpsuit, jumpsuit, cover me");

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función var_dump() </h1>

	<!-- Función var_dump(): Muestra el tipo de variable y su contenido -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Cadena de texto "hector estrada": </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $cadena = "hector estrada";
	 var_dump($cadena);
	 echo "$cadena_cambio";

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> El numero 1995: </b>

	  <br>
	  <br>

	  <?php 

	$number = 1995;
	var_dump($number);

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Cadena de texto "mike": </b>

	  <br>
	  <br>

	  <?php 

	echo var_dump("mike");

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función count() </h1>

	<!-- Función count(): Cuenta todos los elemento en un array o en un objeto -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Array "canciones": </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $canciones=array(
	 	"twenty one pilots"=>array("jumpsuit","lane boy"),
	 	"AM"=>array("DIWN","505")
	  );
	 echo "Numero de canciones:" . count($canciones);

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Array "series" a: </b>

	  <br>
	  <br>

	  <?php 

	$series=array(
	 	"netflix"=>array("Stranger things"),
	 	"CBS"=>array("TBBT"),
	 	"amc"=>array("Breaking bad")
	  );
	 echo "Numero de series:" . count($series);

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Array "marcas de vehiculos": </b>

	  <br>
	  <br>

	  <?php 

	$vehiculos=array(
	 	"Ford"=>array("mustang"),
	 	"Chevrolet"=>array("Camaro"),
	 	"Dodge"=>array("charger")
	  );
	 echo "Numero de vehiculos:" . count($vehiculos);

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función explode() </h1>

	<!-- Función explode(): Dividir o convertir un string en un array  -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Numero de elementos: </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	$cadena = "uno, dos, tres";
	$array = explode(",", $cadena);
	echo "El numero de elementos en el array es: ". count($array);

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Nuemero de elemntos: </b>

	  <br>
	  <br>

	  <?php 

	$cadena = "Casa, carro, edificio, piso, silla, mesa";
	$array = explode(",", $cadena);
	echo "El numero de elementos en el array es: ". count($array) ;

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Numero de elementos: </b>

	  <br>
	  <br>

	  <?php 

	$cadena = "monitor, raton, teclado, cpu, intel, amd, ryzen, control";
	$array = explode(",", $cadena);
	echo "El numero de elementos en el array es: ". count($array) ;

	   ?>

	<br>
	<br>
	<br>
	<br>

	   <h1> Función implode() </h1>

	<!-- Función implode(): Convertir un array en una cadena de texto -->
	 
	 <br>

	 <h3> Ejemplo 1: </h3>

	 <b> Convertir: </b>


	 <br>
	 <br>

	 <?php 

	 //Ejemplo nro. 1

	 $array_equipo = array('portero', 'laterales', 'centrales', 'mediocentros');

	 $cadena_equipo = implode(";", $array_equipo);
	 echo "El equipo separado por ';' es el siguiente:" .$cadena_equipo;

	  ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 2: </h3>

	  <b> Convertir: </b>

	  <br>
	  <br>

	  <?php 

	$array_equipo = array('mustang', 'camaro', 'ferrari');

	 $cadena_equipo = implode(";", $array_equipo);
	 echo "Los vehiculos separado por ';' es el siguiente:" .$cadena_equipo;

	   ?>

	  <br>
	  <br>
	  <br>
	  <br>

	  <h3> Ejemplo 3: </h3>

	  <b> Numero de elementos: </b>

	  <br>
	  <br>

	  <?php 

	$array_equipo = array('bohemian rhapsody', 'hotel california', 'adults are talking');

	 $cadena_equipo = implode(";", $array_equipo);
	 echo "Las canciones separadas por ';' es el siguiente:" .$cadena_equipo;

	   ?>   
	
	</div>
</body>
</html>