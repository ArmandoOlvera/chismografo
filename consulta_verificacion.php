<?php
	include 'basededatos.php';	

	$usuario    = $_POST['usuario'];
	$telefono = $_POST['telefono'];
 
	
	//echo "Hello, World!"."\n";	

	
	
	$sql = "SELECT * FROM usuarios where telefono=\"".$telefono."\"";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
                      $sql = "UPDATE usuarios SET usuario='$usuario', valido=1 WHERE telefono=\"".$telefono."\"";

                    if ($conn->query($sql) === TRUE) {
                      echo "Registro Actualizado de Manera Exitosa"."\n";
                    } else {
                    //  echo "Error: " . $sql . "<br>" . $conn->error;
                    }
	} else {
		echo "0 results\n";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
