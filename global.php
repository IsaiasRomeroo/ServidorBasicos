<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>
//GithubPrueba
<?php
$x = 5;
$y = 10;

function myTest() {
	global $x, $y;
	$y = $x+$y;

}

myTest();
echo $y //output 15
?>
</body>
</html>