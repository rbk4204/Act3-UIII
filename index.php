<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <form method="post">
    	<h1> Alta de empleados </h1>
    	<input type="text" name="Nombre" placeholder="Nombre">
    	<input type="text" name="Apellidopat" placeholder="Apellido paterno">
        <input type="text" name="Apellidomat" placeholder="Apellido materno">
        <input type="text" name="numtelef" placeholder="Telefono">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>