<?php 
	require_once ("ChangeString.php");
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cambio de String</title>
	</head>
	<body>
		<h2>Ingrese Letras</h2>
		<form method="post" action="index.php">
			<input type="text" name="in">
			<input type="submit" name="cambiar" value="change">
		</form>
		<br/>
		<?php 
			if (isset($_POST['in'])) {
				$obj = new ChangeString(); 
				$result = $obj->build($_POST['in']);  
				echo $result;
			}
		?>
	</body>
</html>