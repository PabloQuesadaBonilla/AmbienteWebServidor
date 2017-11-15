<?php
	$inicial = $_POST["Inicial"];
	$mas= $_POST["mas"];
	$menos= $_POST["menos"];
	require("contador.php"); 
	$fecha = new contador($inicial,$mas,$menos);
	echo $fecha->incrementar();
	echo $fecha->decrementar();
?>
<br>
<a href="frmContador.html">Volver</a>