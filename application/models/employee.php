<?php 
class EmployeeModel
{
	private $object = array();

	function __construct()
	{
	}

	function getList($request)
	{
		$this->object['id'] = $request['id'];
		$this->object['name'] = $request['name'];
		$this->object['email'] = $request['email'];
		$this->object['position'] = $request['position'];
		$this->object['salary'] = $request['salary'];
		return $this->object;
	}

	function getDetail($request)
	{
		$this->object['id'] = $request['id'];
		$this->object['name'] = $request['name'];
		$this->object['email'] = $request['email'];
		$this->object['phone'] = $request['phone'];
		$this->object['address'] = $request['address'];
		$this->object['position'] = $request['position'];
		$this->object['salary'] = $request['salary'];
		$this->object['skills'] = $request['skills'];
		return $this->object;
	}
}
 ?>