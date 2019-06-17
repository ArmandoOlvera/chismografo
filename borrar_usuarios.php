<?php
	include 'basededatos.php';


	$id    = $_POST['id'];
 

	//$sql = "INSERT INTO TablaAlumnos (Nombre, ApellidoP, ApellidoM)
	//VALUES ('$nombre', '$apellidop', '$apellidom')";
	$sql = "DELETE FROM usuarios WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Eliminado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
