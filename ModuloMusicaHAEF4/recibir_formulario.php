<?php 
include('clasedb.php');

extract($_REQUEST);

$db=new clasedb();
$con=$db->conectar();
$sql="INSERT INTO datos_musica VALUES(NULL,'".$cancion."' ,'".$autor."',".$ano_lan.",'".$disquera."','".$genero."')";
$resultado=mysqli_query($con,$sql);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php 
if ($resultado) {
  ?>
  <b>Registro ingresado ---> <a href="index.php">Volver</a></b>
  <?php } else{ 
	?>
	<b>Registro no ingresado ---> <a href="index.php>">Volver</a>
		<?php
}
?>
 </body>
 </html>



