<h1>Detalles de paciente</h1>
<?php
$db=new mysqli("localhost","usuario","123","citas");
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$consulta=$db->prepare
	   ("select * from citas where id=?");
	$consulta->bind_param("i",$id);
	$consulta->execute();
	$filas= $consulta->get_result();
	
	$miFila=$filas->fetch_assoc();
	echo "<h2>".$miFila['paciente']."</h2>";
	echo " Id:".$miFila['id'];
	echo " <br> Paciente:".$miFila['paciente'];
	echo " <br> Medico: ".$miFila['medico'];
	echo " <br> Fecha Cita: ".$miFila['fechacita'];
	echo " <br> Costo: ".$miFila['costo'];
	echo " <br> Sucursal: ".$miFila['sucursal'];
	echo "<hr><a href='index.php'>Regresar</a>";
}
else echo "<a href='index.php'>Regresar</a>";

$db->close();
?> 