<?php

class fecha{
	function __construct($dia, $mes ,$año){
			$this->fecha=$año."-".$mes."-".$dia ;
			
		}
	function mañana()
	{
		$respuesta ="<br>----Siguiente dia----<br>";
		$fecha = new DateTime($this->fecha);
		$fecha->modify('+1 day');
		$respuesta .= "Fecha ingresada:".$this->fecha."<br> Siguiente dia:".$fecha->format('Y-m-d') . "<br>";
		return $respuesta;
	}

	function ayer() 
	{
		$respuesta ="<br>----Ayer----<br>";
		$fecha = new DateTime($this->fecha);
		$fecha->modify('-1 day');
		$respuesta .= "Fecha ingresada:".$this->fecha."<br> Ayer:".$fecha->format('Y-m-d') . "<br>";
		return $respuesta;
	}

	function dehoyenocho()
	{
		$respuesta ="<br>----De hoy en ocho----<br>";
		$fecha = new DateTime($this->fecha);
		$fecha->modify('+7 day');
		$respuesta .= "Fecha ingresada:".$this->fecha."<br> De hoy en ocho:".$fecha->format('Y-m-d') . "<br>";
		return $respuesta;
	}
}
?>