<?php 
	require_once ("CompleteRange.php");
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Completar Rango</title>
	</head>
	<body>
		<h2>Ingrese Numeros</h2>
		<p>Numeros enteros positivos separados por comas (,) en orden ascendente.</p>
		<form method="post" action="index.php">
			<input type="text" name="in">
			<input type="submit" name="cambiar" value="change">
		</form>
		<br/>
		<?php 
			if (isset($_POST['in'])) {
				$obj = new CompleteRange(); 
				$result = $obj->build($_POST['in']); 
				echo $result; 
			}
		?>
	</body>
</html>