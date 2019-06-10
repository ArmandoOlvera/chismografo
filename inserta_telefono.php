<?php
include 'basededatos.php';
 
	$id        = $_POST['id'];
	$telefono    = $_POST['telefono'];
	

	$sql = "UPDATE usuarios SET telefono='$telefono' WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Actualizado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
