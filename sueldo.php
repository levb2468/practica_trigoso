<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SUELDO</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$a= $_POST['nombre'];
		$b= $_POST['sueldo'];


$SueTotal=0.000;
if (isset($_POST['comision'])){
	$_comision = $_POST['comision'];
		
		foreach ($_comision as $key => $monto) {
			$SueTotal=$SueTotal+$monto;
			
		}
		
		
}
			echo $b+$SueTotal;

		/*echo "<pre>";

		$_comision = $_POST['comision'];
		print_r($_POST);

		foreach ($_comision as $key => $value) {
			echo $key.'=>'.$value."<br>";
		}
*/


	 ?>
	 <br/>

	 <a href="formulario_sueldo.php">Regresar</a>
</body>
</html>