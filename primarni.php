<?php
$n=2; 
for ($a=1;$a<=$n;$a++){  //ispitujem brojeve do broja n
    $brojac=0;
    for ($b=1;$b<=$a;$b++){
        if ($a%$b==0){
            $brojac++; // ispitujem sa koliko je brojeva nas broj dijeljiv
        }
    }
    if ($brojac==2){ // ako je dijeljiv samo sa dva broja onda je prime
        echo " ".$a."  je prosti broj <br>";
    }
}