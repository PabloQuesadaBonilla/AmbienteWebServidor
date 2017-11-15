<?php

class contador 
{	
	function __construct($valor,$mas,$menos)
	{
		$this->inicial =$valor;
		$this->valor =$valor;
		$this->mas = $mas;
		$this->menos = $menos;

	}

	 function incrementar(){
	 	$this->valor = $this->valor + $this->mas;
	 	return "<br>Valor inicial:".$this->inicial." - Incremento".$this->mas. " - Resultado".$this->valor;
	 } 
	 function  decrementar(){
	 	$valor_antes = $this->valor;
		$this->valor = $this->valor- $this->menos;
		return "<br>Valor inicial:".$valor_antes." - Decremento".$this->menos. " - Resultado".$this->valor;
	 } 
}
?>