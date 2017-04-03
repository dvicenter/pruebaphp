<?php 
/**
	Cambio de letras por la proxima siguiente.
	
	Ejemplo: 
	Entrada: abc  Salida: bcd
*/
final class ChangeString
{
	
	function __construct()
	{
	}

	function build($string)
	{
		$codeString = array();
		for ($i=0; $i < strlen($string) ; $i++) { 
			$codeString[] = ord($string[$i]);
		}

		for ($i=0; $i < count($codeString) ; $i++) { 
		
			if (($codeString[$i] >= 65 && $codeString[$i] < 90) || ($codeString[$i] >= 97 && $codeString[$i] < 122)) {
				$codeString[$i]++;
				$codeString[$i] = chr($codeString[$i]);
			}elseif ($codeString[$i] == 90) {
				$codeString[$i] = 65;
				$codeString[$i] = chr($codeString[$i]);
			}elseif ($codeString[$i] == 122) {
				$codeString[$i] = 97;
				$codeString[$i] = chr($codeString[$i]);
			}else{
				$codeString[$i] = chr($codeString[$i]);
			}

		}

		return implode('', $codeString);
	}
}

?>