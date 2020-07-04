<!---- Ejercicio 1 suma de dos números------------>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body>
<div><h1>Suma simple de dos numeros</h1>
<?php
$num1=8;
$num2=8;
$numero=$num1 + $num2;
echo "la suma de 8 y 8 es: $numero<br>";
?>
</div>

<!-- Ejercico 2 cadena mayor a 20 caracteres, quitando los 3 primeros, y los ultimos 5 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div><h1>Cadena mayor a 20 caracteres, quitando los 3 primeros, y los ultimos 5</h1>
<?php
$primeros="You rock my world you know 123456";
$ultimos=substr($primeros, 3, -5);

echo "Cadena original: $primeros <br/>";
echo "Cadena Substraida: $ultimos";
?>
</div>
</body>
</html>

<!-- Ejercicio 3Últimos 10 caracteres de la cadena -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div><h1>Últimos 10 caracteres de la cadena</h1>
<?php
$primeros="You rock my world you know 123456";
$ultimos=substr($primeros, -10);

echo "Cadena original: $primeros <br/>";
echo "Cadena Substraida: $ultimos";
?>
</div>
</body>
</html>


<!-- Ejercicio 3 - 10 caracteres restantes después de quitarle los primeros 5 de la cadena -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div><h1>10 caracteres restantes después de suprimir los primeros 5 de la cadena</h1>
<?php
$primeros="You rock my world you know 123456";
$ultimos=substr($primeros, 5);
$ultimos=substr($ultimos, -10);

echo"Cadena original: $primeros <br/>";
echo"Cadena Substraida: $ultimos";
?>
</body>
</html>
</body>
</html>
