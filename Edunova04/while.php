<?php

$ostaniUPetlji=true;
$i=0;
while($ostaniUPetlji){
    echo $i . "<br />";

    $ostaniUPetlji=++$i<10;
}

echo "<hr />";
$i=10;
while($i<10){
    if($i===7){
        break;
    }
    if($i===2){
        continue;
    }
    echo $i++ . "<br />";

}