<?php
	require("Persona.php");
	require("carrera.php");
	$Andrea= new estudiante(4588, "Andrea");
	$otro = new estudiante(154, "Gerardo");
	$Sistemas = new Carrera("Ing.Sistemas", "Fidelitas");
	$Sistemas->agregarEstudiante($Andrea);
	$Sistemas->agregarEstudiante($otro);
	$Sistemas->mostrar();

	echo "<hr>";
	echo $Andrea->mostrarDatos(). "<br>";
	echo $otro->mostrarDatos(). "<br>";

	/*Cambio de dato*/

	$otro->cedula=5000;
	/*Matricula un curso*/

	$otro->matricular("SC-570");
	echo $otro->mostrarDatos()."<br>";
	echo "<h2> Lista de cursos </h2>";

	$otro->listaDeCursos();
?>