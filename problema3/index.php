<?php 
	require_once ("ClearPar.php");
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Eliminar Parentesis</title>
	</head>
	<body>
		<h2>Ingrese Parentesis.</h2>
		<form method="post" action="index.php">
			<input type="text" name="in">
			<input type="submit" name="cambiar" value="change">
		</form>
		<br/>
		<?php 
			if (isset($_POST['in'])) {
				$obj = new ClearPar(); 
				$result = $obj->build($_POST['in']); 
				echo $result; 
			}
		?>
	</body>
</html>