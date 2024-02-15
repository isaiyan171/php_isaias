<!doctype html>
<html>
<head>
    <title>Comprar dos numeros 
    <meta Charset="UTF-8"/>
</head>
<body>
    <h1>TIENDA ONLINE</h1>
    <?php
    $edad = 7;
    if($edad >= 18 && $edad < 70){
        echo "Eres mayor";
        header("Location: https://www.google.com");
        exit;
    }else if ($edad < 18 && $edad > 11){
        $mensaje = "<script> alert(´pa yutu´);</script>";
        print $mensaje;
    }else{
        header("location: https://www.youtube.com");
        exit;
    }
    ?>
</body>
</html>