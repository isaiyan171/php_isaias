<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Array</title>
</head>
<body>
<?php
    $dia[0] = " ";
    $dia[1] = "lunes";
    $dia[2] = "martes";
    $dia[3] = "miercolos";
    $dia[4] = "jueves";
    $dia[5] = "viernes";
    $dia[6] = "sabado";
    $dia[7] = "domingo";

    $hoy = date("N") - 1;
print("Hoy es:".$dia[$hoy]);

print("<h4>LOS DIAS SON</h4>");
for($x = 0 ; $x < count($dia) ; $x++){
    if($x == $hoy){
        print("<button>".$dia[$x]."</buttom>" );
    }else
        print($dia[$x]."<br> ");
    }