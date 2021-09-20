<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Interaccion con el usuario</title>
</head>
<body>
	<?php
    // recojo los datos en variables
	$n1 = $_GET["num1"];
	$n2 = $_GET["num2"];
	
	//preparo la salida de informacion
	echo '<h1>Suma de dos numeros</h1>';

	echo "El numero 1 es  $n1";

	echo '<br />';
    echo "El numero 2 es $n2";
    echo '<br />';
    //opero con los datos
    $suma=$n1+$n2;

    //salida del resultado de la operacion
    echo "El resultado de la suma es" .$suma;
	?>
</body>
</html>