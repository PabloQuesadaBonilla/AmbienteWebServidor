<?php
	$cuenta = $_POST["cuenta"];
	$monto= $_POST["monto"];

	require("cuentas.php"); 
	$cuenta1 = new cuenta();
	echo $cuenta1 -> depositar($cuenta ,$monto);
	echo $cuenta1 -> retirar($cuenta ,$monto);
	echo $cuenta1 -> transferir($cuenta ,$monto);
?>
<br>
<a href="frmCuentas.html">Volver</a>