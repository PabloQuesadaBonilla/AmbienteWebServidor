<?php
	require("fecha.php"); 
	$dia = $_POST["dia"];
	$mes = $_POST["mes"];
	$ano = $_POST["ano"];
	$fecha = new fecha($dia,$mes,$ano);
	echo $fecha->mañana();
	echo $fecha->ayer();
	echo $fecha->dehoyenocho();
?><br>
<a href="frmFecha.html">Volver</a>