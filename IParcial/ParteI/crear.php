<?php

$db=new mysqli("localhost","usuario","123","citas");

if(isset($_POST['id'])){
	$id=$_POST['id'];
	$paciente=$_POST['paciente'];
	$medico=$_POST['medico'];
	$fechacita=$_POST['fechacita'];
	$costo=$_POST['costo'];
	$sucursal=$_POST['sucursal'];
	/* insert into Tabla(Columnas) Values(Datos)*/
	$consulta=$db->prepare("insert into citas(id, paciente, medico, fechacita, costo, sucursal)
							values(?,?,?,?,?,?)");
	$consulta->bind_param("isssss", $id, $paciente, $medico, $fechacita, $costo, $sucursal); 
	$consulta->execute();
	if($consulta->affected_rows>0){
		echo "<h2>Insercion exitosa</h2>";
	    echo "<a href='index.php'>Regresar</a>";
	}else{
		echo "<h2>Fallo al insertar</h2>";
		echo "<h3>".$db->error. "</h3>";
	    echo "<a href='index.php'>Regresar</a>";
	}
}else echo "<a href='index.php'>Regresar</a>";

$db->close();
?> 