<?php
include('clasedb.php');
extract($_REQUEST);
$db=new conexion();
$conex=$db->conectar();

for($i=1;$i<=20;$i++)
{
/*ID*/
$id=rand(1,1000);
/*Park*/
$est=rand(1,2);
if($est==1)
{$est='Si';}
else
{$est='No';}
/*Status*/
$sta=rand(1,3);
if($sta==1)
{$sta='Ocupado';}
elseif($sta==2)
{$sta='Desocupado';}
elseif($sta==3)
{$sta='Mantenimiento';}
/*Tipos*/
$tipo=rand(1,5);
if($tipo==1)
{$tipo='Casa';}
elseif($sta==2)
{$tipo='Departamento';}
elseif($sta==3)
{$tipo='Chalet';}
elseif($sta==4)
{$tipo='Quinta';}
elseif($sta==5)
{$tipo='Otro';}

//$post=rand(10,99);
/*IN*/

$sql="INSERT INTO inmuebles (id,idem,estacionamiento,status,tipo,cod_postal) 
VALUES 
(NULL,'CASA$id','$est','$sta','$tipo','$post$post')";
$result=mysqli_query($conex,$sql);
if($result)
{	echo $i.') registro ingresado exitosamente<br>';
}else{
	echo $i.') error al ingresar registros<br>';
}
}
echo '<a href="index.php">Volver</a>';
