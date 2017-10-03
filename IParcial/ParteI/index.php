<?php 

echo "<h1>Index</h1>";

$db=new mysqli("localhost","usuario","123","citas");

$sql="select * from citas"; //where FILTRO
$consulta=$db->query($sql);
if($consulta===FALSE){
	echo "<h2>Error. ".$db->error."</h2>";
}

//recorremos el conjunto de filas
while($fila=$consulta->fetch_assoc()){
	
	$link="detalles.php?id=".$fila['id'];
	$nombre=$fila['paciente'];
	echo "<a href='$link'>$nombre<a/><br>";
}
$db->close();

?>

<h2>Insertar dato</h2>
<form action="crear.php" method="post">
Id: <input type="text" name="id"><br>
Paciente: <input type="text" name="paciente"><br>
Medico: <input type="text" name="medico"><br>
Fecha Cita: <input type="text" name="fechacita"><br>
Costo: <input type="text" name="costo"><br>
Sucursal: <input type="text" name="sucursal"><br>
<button type="submit">Crear</button>
</form> 