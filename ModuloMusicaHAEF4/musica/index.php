<?php
extract($_REQUEST);
$data=unserialize($data);
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="table-style.css">
	<title>Lista de Categorias</title>
<script type="text/javascript">
	function eliminar(id) {
		if (confirm("Seguro desea eliminar el registro?")) {
			window.location="MusicaControlador.php?operacion=eliminar&id_musica="+id;
		}
	}
</script>
</head>
<body id="fondo">
<table align="center" border="solid" id="tabla">
<a href="../index.php" class="ini">Inicio</a>
<center class="titulo"> Registro de canciones </center>
	<tr><th>Nro</th><th>Canci&oacute;n</th><th>Autor</th><th>A&ntilde;o de lanzamiento:</th><th>Disquera:</th><th>Genero:</th><th>Opciones</th></tr>
	<?php $num=1;
		for ($i=0; $i< $filas;$i++) {
			echo "<tr>";
	?>
<td><?=$num?></td>
	<?php for ($j=1;$j <$campos; $j++) { ?>
		<td><?=$data[$i][$j]?></td>
<?php } ?>
<td>
	<a href="MusicaControlador.php?operacion=modificar&id_musica=<?=$data[$i][0]?>">Modificar</a>
	<a href="javascript:eliminar(<?=$data[$i][0]?>)">Eliminar</a>
</td>
<?php
	$num++;
	}	?>

</table>
</body>
</html>	