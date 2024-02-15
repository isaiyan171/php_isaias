<!DOCTYPE html>
<html>
</head>
<meta charset="UTF-8"/>
<title>Array 2</title>
</head>
<body>
    <?php
    $edades = array("yolanda" => "25", "yanet" =>"21", "ana" =>"17");
    print "yanet tiene". $edades['yanet']. "años" ;
    echo "<hr>";
    foreach($edades as $x => $valor) {
        print "clave=" .$x. ", Valor=" .$valor;
        print "<br>";
    }
    ?>
</body>
</html>