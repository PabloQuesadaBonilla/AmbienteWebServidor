<hr>
<?php
	require("cuentas.php"); 
	$cuenta1 = new cuenta();
	echo $cuenta1 -> depositar('707924361','5000');
	echo $cuenta1 -> retirar('707924361','5000');
	echo $cuenta1 -> transferir('707924361','5000');
?>
<hr>

<?php
	require("fecha.php"); 
	$fecha = new fecha('8','9','1999');
	echo $fecha->mañana();
	echo $fecha->ayer();
	echo $fecha->dehoyenocho();
?>
<hr>
<?php
	require("contador.php"); 
	$fecha = new contador('8','9','1999');
	echo $fecha->incrementar();
	echo $fecha->decrementar();
?><br>
<a href="index.html">Inicio</a>