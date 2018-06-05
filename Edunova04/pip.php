<?php

$i=1;
$j=2;


// predinkrement
++$i; //i se prvo uveća pa se koristi

//postinkrement
$i++; //i se prvo koristi pa se uveća



// preddekrement
--$i; //i se prvo umanji pa se koristi

//postdekrement
$i--; //i se prvo koristi pa se umanji

$i=1; $j=1;

$i = ++$j + ++$i; //i=4 j=2
echo $i . " " . $j . "<hr>";
$j = $j++; //i=4 j=2
echo $i . " " . $j . "<hr>";
$i = ++$j -1; // i=2 j=3
echo $i . " " . $j . "<hr>";
$j = $i - 2; // i=2 j=0
echo $i . " " . $j . "<hr>";

// koliko je i=2 i j=0

echo $i . " " . $j;