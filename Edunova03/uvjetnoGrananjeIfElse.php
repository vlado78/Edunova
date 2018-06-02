<?php

$broj=2;


if($broj>3 & $broj<8){ //provjerava oba uvjeta (&) 0 i 1 => 0
    echo "OK";
}else{
    echo "NE";
}

if($broj>3 && $broj<8){ //u slučaju da prva provjera ne prođe, ne gleda se druga 0 ne provjerava drugi =>0
    echo "OK";
}

if($broj==2 | $broj==3){ //provjeravaju se oba

}

if($broj===2 || $broj===3){ //U slučaju da je prvi zadovoljen drugi se ne provjerava

}

//== ===
$b=2;
if($b=="2"){
    echo "tocno";
} else if ($b==="2"){
    echo "netocno";
}else{
    echo "NE";
}

if($b>4){
    if($b<10){
        echo "DA";
    }
}
