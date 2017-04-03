<?php 
/**
	Clase encargada de eliminar parentesis que no tengan parejas.

	Ejemplo:
	Entrada: ((() Salida ()
*/
class ClearPar
{
	private $startPar = "(";
	private $endPar = ")";
	private $onlyPar = true;
	
	function __construct()
	{
	}

	// Validacion de texto solo parentesis.
	function validatePar($string)
	{
		if (strcmp($string, $this->startPar) == 0 || strcmp($string, $this->endPar) == 0) {
			return true;
		}else{
			$this->onlyPar = false;
			return false;
		}
	}

	function build($string)
	{
		$result = '';
			for ($i=0; $i < strlen($string) ; $i++) { 
				if ($this->validatePar($string[$i])) {
					if ($string[$i] == $this->startPar) {
						if (isset($string[$i+1])) {
							if ($string[$i+1] == $this->endPar) {
								$result = $result.$string[$i].$string[$i+1];
							}
						}
					}
				}
			}
			if ($this->onlyPar == false) {
				$result = "Ingresar solo parentensis.";
			}
			return $result;
	}
}
 ?>