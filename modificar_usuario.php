<?php
include 'basededatos.php';
 
	$id        = $_POST['id'];
	$usuario    = $_POST['usuario'];
	$password = $_POST['password'];
	$nivel = $_POST['nivel'];
	

	$sql = "UPDATE usuarios SET usuario='$usuario', password='$password', nivel='$nivel' WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Actualizado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
