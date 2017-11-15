<?php
require("bancos.php"); 

class cuenta{
	function __construct(){
		$this->saldo = rand ( 2500 , 2500000);
	}

	function depositar($cuenta,$monto){
		$respuesta = "<br>Cuenta ".$cuenta;
		$respuesta .= "<br>------  Proceso de Deposito  ------<br>";

		$bancos=new Bancos();

		if($bancos->buscar($cuenta))
		{
			$saldo_anterior = $this->saldo;
			$this->saldo = $this->saldo + $monto;
			$respuesta .= "<br>Saldo anterior: ".$saldo_anterior."<br>Saldo Actual:".$this->saldo."<br>Monto Abonado: ".$monto;
		}else{
			$respuesta .= "No existe la cuenta ".$cuenta;
		}

		return $respuesta;
	} 

	function retirar($cuenta,$monto){
		$respuesta = "";
		$bancos=new Bancos();
		$respuesta .= "<br>-----  Proceso de Retiro  -----<br>";

		if($bancos->buscar($cuenta))
		{
			$saldo_anterior = $this->saldo;
			$this->saldo = $this->saldo - $monto;
			$respuesta .= "<br>Saldo anterior: ".$saldo_anterior."<br>Saldo Actual:".$this->saldo."<br>Monto Retirado: ".$monto;
		}else{
			$respuesta .= "No existe la cuenta ".$cuenta;
		}
		return $respuesta;
	}

	function transferir($cuenta, $monto){
		$respuesta = "";
		$bancos=new Bancos();
		$respuesta .= "<br>-----  Proceso de transferencia  -----<br>";

		if($bancos->buscar($cuenta))
		{
			$this->saldo = $this->saldo - $monto;
			$respuesta .= "Cuenta para transferencia".$cuenta."<br>Monto de la transferencia:".$monto."<br>Monto de su cuenta:".$this->saldo;
		}else{
			$respuesta .= "No existe la cuenta ".$cuenta;
		}
		return $respuesta;
	}
}

?>