<?php

//zbrojiti sve brojeve u get nizu

print_r($_GET);
$ukupno=0;
//foreach petlja
foreach($_GET as $kljuc => $vrijednost){
    $ukupno=$ukupno+$vrijednost;
}

echo $ukupno;