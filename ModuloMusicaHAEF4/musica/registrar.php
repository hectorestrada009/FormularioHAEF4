<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<a href="PersonasControlador.php?operacion=index">Listar Personas</a><br>
	<a href="../index.php">Inicio</a><br>
	<form action="PersonasControlador.php" method="post" name="formulario">
		
<table>
	<tr>
		<td colspan="2">Registro de personas:</td>
	</tr>

	<tr>
		<td>Names:</td><td><input type="text" name="names" id="names" placeholder="Ej: Martín José" title="Ingrese sus names"></td>
	</tr>

	<tr>
		<td>Surnames:</td><td><input type="text" name="surnames" id="surnames" placeholder="Ej: Pérez Salcedo" title="Ingrese sus surnames"></td>
	</tr>

	<tr>
		<td>DNI:</td><td><input type="number" name="dni" id="dni" placeholder="Ej: 12345678" title="Ingre sus dni"></td>
	</tr>

	<tr>
		<td>
			<input type="hidden" name="operacion" value="guardar">
			<input type="submit" name="enviar" value="Enviar">
		</td>
	</tr>

</table>
</form>
</body>
</html> 