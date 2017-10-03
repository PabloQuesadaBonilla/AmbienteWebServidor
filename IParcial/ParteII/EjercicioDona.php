<?php
if(isset($_POST['area'])){
	$area=$_POST['area'];

	$Pi=3.14;
	$R=10;
	$r=3;
	$Cuadrado= $Pi*$Pi;
	$area= $Cuadrado*($R-$r)*($R+$r);
	echo "El Area que queremos recubrir de la dona es: $area <br>";
  }
  echo "<br><a href='EjercicioDona.html'>Regresar</a>";
?>