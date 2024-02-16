<?php
function sumar($x, $y){
    return $x+$y;
}
function restar($x, $y){
    return $x-$y;
}
function multiplicar($x, $y){
    return $x*$y;
}function dividir($x, $y){
    return $x/$y;
}
//variable global
$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];
$operacion = $_POST["op"];

if ($operacion == "suma"){
    $resultado = sumar($numero1,$numero2);
}else if($operacion == "resta"){
    $resultado = restar($numero1, $numero2);
}else if($operacion == "multiplicar"){
    $resultado = multiplicar($numero1,$numero2);
}else if($operacion == "dividir"){
    $resultado = dividir($numero1,$numero2);
}

echo"EL RESULTADO ES: " .$resultado;
