<?php

$niz = array(2,2,2,4,5);

$ukupno=0;
foreach($niz as $vrijednost):
    $ukupno+=$vrijednost;
endforeach;

echo $ukupno;