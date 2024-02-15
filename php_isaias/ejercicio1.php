<?php
$llueve = "si";
$es_feriado = "no";
$es_finde = "no";
#programa que devuelve si eres mayor o menor de edad
if($llueve == "si" || $es_feriado == "si" || "si"){
    print("me quedo en casa");
}else{
    print ("Me voy a snpp");
}
print("<hr>");
$llueve2 = 1;
$es_feriado2 = null;
$es_finde2 = null;

if($llueve2 || $es_feriado2 || $es_finde2){
    print("me quedo en casa dos");
}else{
    print ("Me voy a snpp dos");
}
?>