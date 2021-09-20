<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mi primera pagina con php</title>
</head>
<body>
<h1>tipos basicos</h1>
<?php
$un_bool = FALSE;
$una_cadena = "textos";
$un_entero = 12;
$un_real = 3.1415;
echo "Con var_dump:<BR/ ><BR/ >";
echo var_dump($un_bool);
echo"<BR/ >";
echo var_dump($una_cadena);
echo"<BR/ >";
echo var_dump($un_entero);
echo"<BR/ >";
echo var_dump($un_real);
echo"<BR/ >";
echo"<BR/ >";
echo " con gettype:<BR/ ><BR/ >";

echo gettype($un_bool);
echo "<BR/ >";
echo gettype($una_cadena);
echo "<BR/ >";
echo gettype($un_entero);
echo "<BR/ >";
echo gettype($un_real);
echo "<BR/ >";
echo "<BR/ >";

if(is_bool($un_bool)){
  echo 'es un boleano<br/ >';
}else{
 echo ' no es un boleano<br/ >';
}
if(is_bool($un_entero)){
  echo 'es un entero<br/ >';
}else{
 echo ' no es un entero<br/ >';
}
if(is_double($un_real)){
  echo 'es un real<br/ >';
}else{
 echo ' no es un real<br/ >';
}
if(is_string($una_cadena)){
  echo 'es una cadena<br/ >';
}else{
 echo ' no es una cadena<br/ >';
}
?>
</body>
</html>