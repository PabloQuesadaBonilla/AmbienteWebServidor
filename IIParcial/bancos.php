<?php

class bancos{
		function __construct(){
			$this->cuentas=[];

			$this->cuentas[]='707924361';
			$this->cuentas[]='427174299';
			$this->cuentas[]='908635862';
		}

		function buscar($cuenta)
		{
			$existe = array_search($cuenta , $this->cuentas);
			if((string)$existe =="0")
			{
				return true;
			}else{
				return false;
			}
		}

		function mostrar(){
			echo "<ul>";
			foreach ($this->cuentas as $cuenta)
			{
				echo "<li>$cuenta</li>";
			}
			echo "</ul>";
		}
}
?>