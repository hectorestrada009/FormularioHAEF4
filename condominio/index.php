<?php 

	include("clasedb.php");
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();




	//sql para crear tabla inmuebles
/* $sql="CREATE TABLE inmuebles(id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem VARCHAR(50) NOT NULL, estacionamiento ENUM('Si','No'), status ENUM('Ocupado','Desocupado','Mantenimiento'), tipo ENUM('Casa','Apartamento','Chalet','Quinta','Otro'),cod_postal VARCHAR(5));";
//echo $sql;
$resultado=mysqli_query($conex,$sql);
if ($resultado) {
	echo "Tabla creada con exito<br>";
	
	} else {
	echo "La tabla no pudo ser creada<br>";
}
*/

$cont=0;
for ($i=0; $i < 20; $i++) {
	$idem=generarIdem(4);
	if ($i%2==0){
		$estacionamiento="Si";
	} else {
		$estacionamiento="No";
	}
	$status=seleccionar_status($i);
	$tipo=seleccionar_tipo();
	$cod_postal=generarCP();

	$sql="INSERT INTO inmuebles VALUES(NULL,'".$idem."','".$estacionamiento."','".$status."','".$tipo."','".$cod_postal."')";
	$resultado=mysqli_query($conex,$sql);
	if($resultado){
		$cont++;
	}
}

	if ($cont==20) {
		echo "Se logró registar los 20 inmuebles<b>";
	} else {
		echo "Hubo inmuebles que no pudieron ser registrados pues su idem ya estaba, solo fueron registrados ".$cont." inmuebles";
	}



function generarIdem($Longitud) {
		$key = '';
		$pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$max = strlen($pattern)-1;
		for($i=0;$i < $Longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
		return $key;
	}

function seleccionar_status($i)
{
	$status="";
	switch (gmp_prob_prime($i)) {
		case 0:
		$status= "Ocupado";
		break;
		case 1:
		$status= "Mantenimiento";
		break;
		case 2:
		$status= "Desocupado";
		break;
	}

	return $status;
}

function seleccionar_tipo()
{
//Apartamento, Chalet, Quinta, Otro
	$tipo="";
	switch(rand(1,5)){
		case 1:
		$tipo= "Casa";
		break;
		case 2:
		$tipo= "Apartamento";
		break;
		case 3:
		$tipo= "Chalet";
		break;
		case 4:
		$tipo= "Quinta";
		break;
		case 5:
		$tipo= "Otro";
		break;
		
	}
	return $tipo;
}

function generarCP(){
	$longitud=4;
	$key = '';
	$pattern = '1234567890';
	$max = strlen($pattern)-1;
	for($i=0;$i < $longitud; $i++) $key .= $pattern{mt_rand(0,$max)};
}


 ?>