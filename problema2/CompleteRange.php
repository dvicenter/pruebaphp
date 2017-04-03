<?php 
/**
	Clase encargada de completar un rango de numerico
	determinado por numeros positivos acendentes.

	Ejemplo: 
	Entrada: 1,5,6 Salida: 1,2,3,4,5,6
*/
class CompleteRange
{
	
	function __construct()
	{
	}

	function build($string)
	{
		$paramIn = split(",", trim($string)); 
		$rangeNew = array();
		$countRange = count($paramIn);

		$startRange = $paramIn[0];
		$endRange = $paramIn[$countRange-1];

		$result = '';

		foreach (range($startRange, $endRange) as $número) {
			$result .= $número.",";
		}
		$result = substr($result, 0, strlen($result)-1);
		return $result;
	}
}

 ?>