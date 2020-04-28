<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando Musica</title>
	<link rel="stylesheet" type="text/css" href="chale.css">
</head>
<body>
<br>
<form action="MusicaControlador.php" method="post" name="formulario">
<table id="pp">
	<tr>
		<td>
		<td colspan="2">Editar musica:</td>
	</tr>

<tr>
	<td>Canci&oacute;n:</td><td><input type="text" name="cancion" id="cancion"  placeholder="Introduzca una canci&oacute;n" title="Ingrese una canción" value="<?=$data[1]?>" class="controls"></td>
</tr>

<tr>
	<td>Autor:</td><td><input type="text" name="autor" id="autor" placeholder="Introdusca el autor/banda" title="Ingrese la actor/banda" value="<?=$data[2]?>" class="controls"></td>
</tr>

<tr>
	<td>A&ntilde;o de lanzamiento:</td><td><input type="number" name="ano_lan" id="ano_lan" placeholder="Introduzca el a&ntilde;o de lanzamiento" title="Ingrese el año de lanzamiento" value="<?=$data[3]?>" class="controls"></td>
</tr>

<tr>
	<td>Disquera:</td><td> <input type="text" name="disquera" id="disquera" placeholder="Introduzca la disquera" title="Ingrese la disquera" value="<?=$data[4]?>" class="controls"></td>
</tr>

<tr>
	<td>Genero:</td><td><input type="text" name="genero" id="genero" placeholder="Introduzca el genero" title="Ingrese el genero" value="<?=$data[5]?>" class="controls"></td>
</tr>

<tr>
	<td>
		<input type="hidden" name="id_musica" value="<?=$data[0]?>">
		<input type="hidden" name="operacion" value="actualizar">
		<input type="submit" name="enviar" value="Enviar" class="btn">	</td>
</tr>
</table>
</form>
</body>
</html>