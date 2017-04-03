<?php
// Routes
require __DIR__ . '/../controllers/employee.php';

// Url base [/] - Listado de empleados
$app->get('/', function ($request, $response, $args) {
	$employee = new EmployeeController();
	$result = $employee->getAll();
	return $this->renderer->render($response, 'index.phtml', ['employees' => $result]);
});

// Url detalle [/574daa379545e9af101c2731] - Detalle de empleado
$app->get('/{id}', function ($request, $response, $args) {
	$employee = new EmployeeController();
	$result = $employee->getById($args['id']);
	return $this->renderer->render($response, 'detail.phtml', ['employee' => $result]);
});

// Url email [/email] - Busqueda por email
$app->post('/email', function ($request, $response, $args) {
	$param = $request->getParsedBody();
	$employee = new EmployeeController();
	$result = $employee->getByEmail($param['email']);
	return $this->renderer->render($response, 'index.phtml', ['employees' => $result]);
});

/* 
	Url ApiRest [/api/v1/salary/min/{min}/max/{max}] - Busqueda por salario minimo y maximo
	Salida en formato : XML
*/
$app->get('/api/v1/salary/min/{min}/max/{max}', function ($request, $response, $args) {
	$employee = new EmployeeController();
	$result = $employee->getBySalary($args['min'],$args['max']);

	$response = $response->withHeader('Content-type', 'text/xml');
    $response->getBody()->write($result);
    return $response;
});