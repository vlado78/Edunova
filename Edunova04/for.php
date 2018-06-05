<?php

echo "Osijek<br/>";

for($i=0;$i<100;$i++){
    if($i===5){
        break; //chortcuircuiting
    }
    if($i!=3){
       continue;  //chortcuircuiting
    }

    echo $i. " Osijek<br/>";
   
}

echo "Osijek<br/>";