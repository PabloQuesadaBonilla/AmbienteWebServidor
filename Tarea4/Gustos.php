<?php

	class Gustos{
		public $nombreGusto;
		public $descripcion;
		public $personas;

		function __construct($nombreGusto,$descripcion){
			$this->nombreGusto=$nombreGusto;
			$this->descripcion=$descripcion;
			$this->personas=[];
		}

		function agregarPersona($p){
			$this->personas[] = $p;
		}

		function  mostrar(){
			echo "<h1> $this->nombreGusto - $this->nombredescripcion</h1>";
			echo "<ul>";
			foreach ($this->personas as $per) {
				echo "<li>".$per->mostrarDatos()."</li>";
			}
			echo "</ul>"; 
		}
	}
?>