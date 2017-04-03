<?php 
require __DIR__ . '/../models/employee.php';

class EmployeeController 
{
	private $employeeJson;
	private $store;

	function __construct()
	{
		$this->employeeJson = file_get_contents(dirname(__DIR__).'/store/employees.json');
		$this->store = json_decode($this->employeeJson, true);
	}

	// Funcion para obtener todos los empleados.
	// Parametro: null.
	// Retonra : array $resutl.
	function getAll()
	{
		$result = array();
		for ($i=0; $i < count($this->store); $i++) { 
			$employee = new EmployeeModel();
			$employee = $employee->getList($this->store[$i]);
			array_push($result, $employee);
		}
		return $result;
	}

	// Funcion para obtener datos de un empleado.
	// Parametro : string $id.
	// Retorna : array $employee.
	function getById($id)
	{
		$result = array();
		$employeeIndex = array_search($id, array_column($this->store, 'id'));
		if (!is_bool($employeeIndex)) {
			$employee = new EmployeeModel();
			$employee = $employee->getDetail($this->store[$employeeIndex]);
			return $employee;
		}else{
			return null;
		}
	}

	// Funcion buscar empleado a traves de email.
	// Parametro : string $email.
	// Retorna: Array $result.
	function getByEmail($email)
	{
		$result = array();
		$employeeIndex = array_search($email, array_column($this->store, 'email'));
		if (!is_bool($employeeIndex)) {
			$employee = new EmployeeModel();
			$employee = $employee->getList($this->store[$employeeIndex]);
			array_push($result, $employee);
			return $result;
		}else{
			return null;
		}
	}

	// Funcion buscar empleado a partir de un salario minimo y maximo.
	// Parametro : string $min, string $max.
	// Returna : Objeto en formato XML.
	function getBySalary($min, $max)
	{
		$result = array();
		$min = str_replace(',', '', $min);
		$max = str_replace(',', '', $max);
		for ($i=0; $i < count($this->store); $i++) { 
			$employeeSalary = substr($this->store[$i]['salary'], 1);
			$employeeSalary = str_replace(',', '', $employeeSalary);
			if ($employeeSalary >= $min && $employeeSalary <= $max) {
				array_push($result, $this->store[$i]);
			}
		}
		
		$xml = new SimpleXMLElement("<?xml version=\"1.0\"?><employees></employees>");

		//function call to convert array to xml
		$this->array_to_xml($result,$xml);

		return $xml->asXML();
	}


	// Funcion para convertir array a xml.
	// Parametro : array $array, Objeto $xml_user_info
	function array_to_xml($array, &$xml_user_info) {
		foreach($array as $key => $value) {
			if(is_array($value)) {
				if(!is_numeric($key)){
					$subnode = $xml_user_info->addChild("$key");
					$this->array_to_xml($value, $subnode);
				}else{
					$subnode = $xml_user_info->addChild("item$key");
					$this->array_to_xml($value, $subnode);
				}
			}else {
				$xml_user_info->addChild("$key",htmlspecialchars("$value"));
			}
		}
	}

}
 ?>