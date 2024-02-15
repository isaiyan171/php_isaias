
        <?php
        $productos = array (
            array("heladera",250000,18),
            array("microondas",1500000,9),
            array("cocina",590000,21),
            array("licuadora",450000,15),
            array("mixer",260000,5),
            array("ventilador",150000,15),
        );

        for($x = 0 ; $x < count($productos);$x++){
            print("<br>".$productos[$x][0]. ", precio: ".$productos[$x][1]);
            }

        echo"<br>";
        for($X = 0 ; $x < count($productos);$x++){
            print("producto $x");
            for($y = 0 ; $y < 3 ; $y++){
                print($productos[$x][$y]. " - ");
            }
        }
echo "<hr>";
foreach($productos as $p){
    foreach($p as $item){
        print($item. " | ");
    }
}
        ?>
