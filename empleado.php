
<?php 

include("con_db.php");

if (isset($_POST["register"])){
 if (strlen($_POST["Nombre"]) >= 1 && strlen($_POST["Apellidopat"]) >=1 && strlen($_POST["Apellidomat"]) >= 1 && strlen($_POST["numtelef"]) >= 1 ) {
	

	$Nombre = trim($_POST["Nombre"]);
	$Apellidopat = trim($_POST["Apellidopat"]); 
	$Apellidomat = trim($_POST["Apellidomat"]); 
	$numtelef = trim($_POST["numtelef"]);

	$consulta = "INSERT INTO empleado (Nombre, Apellidopat, Apellidomat, numtelef)
	VALUES ('$Nombre','$Apellidopat','$Apellidomat','$numtelef' )";

	$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}


?>