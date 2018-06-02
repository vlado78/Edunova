<?php 

    $crvena= isset($_GET["crvena"]) ? $_GET["crvena"] : 0;
    $zelena= isset($_GET["zelena"]) ? $_GET["zelena"] : 0;
    $plava= isset($_GET["plava"]) ? $_GET["plava"] : 255;

    if( $crvena<0 || $crvena>255 || $zelena<0 || $zelena>255 || $plava<0 || $plava>255){
        $crvena=0;
        $zelena=0;
        $plava=255;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bojanje stranice</title>

    <style>
        body{
            background-color: rgb(<?php echo $crvena ?>,<?php echo $zelena ?>,<?php echo $plava ?>);
        }
    </style>
</head>
<body>
Program prima tri broja, vrijednosti crvene, zelene i plave boje

Primjeljnim bojama oboja pozadinu stranice. Ako ne primi parametar stranica će biti plave boje  
</body>
</html>

