<?php
	class Estudiante{
		public $nombre;
		public $apellido;
		public $cedula;
		
		function __construct($cedula, $nombre, $apellido){
			$this-> cedula= $cedula;
			$this-> nombre = $nombre;
			$this-> apellido = $apellido;
		}

		function mostrarDatos(){
			$cantidad =count($this->gustos);
			return "<b> $this->cedula</b> $this->nombre ($cantidad gustos)";
		}

		function hacer($gusto){
			$this-> gustos[]=$gusto;
		}

		function listaDeGustos(){
			echo "<ul>";
			foreach ($this->gustos as $gustos) {
				echo "<li>$curso</li>";
			}
			echo "</ul>";
		}
	}

?>