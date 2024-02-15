<?php
#declarar variables
$nombre = "isaias"; #string
$edad = "17"; #flotante
$fechaNacimiento = "2006";
$num1 = 15;
$num2 = 3;

print("<h1>Hola $nombre </h1>");
echo "bueno, ".$nombre. " tu edad es ".$edad. " y fecha de nacimiento en ".$fechaNacimiento;
echo "<br>Suma: ".$num1 + $num2;
echo "<br>Resta: ".$num1 - $num2;
echo "<br>Multi: ".$num1 * $num2;
echo "<br>Divi: ".$num1 / $num2;

echo "<br>Mayor que: ".($num1 > $num2); #true
echo "<br>Menor que: ".($num1 < $num2); #false
echo "<br>Mayor o igual que: ".($num1 >= $num2);
echo "<br>Menor o igual que: ".($num1 <= $num2);
echo "<br>Igual que: ".($num1 == $num2);
echo "<br>DIferente que que: ".($num1 != $num2);
?>
