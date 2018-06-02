<?php

// Za primljeni broj program ispisuje da li je paran

if(isset($_GET["b"])){
    if(intval($_GET["b"])>0){
        $b=$_GET["b"];

        if($b%2===0){
            echo "Paran";
        }else{
            echo "Ne paran";
        }
    }else{
        echo "Parametar b nije broj";
    }
    
}else{
    echo "obavezno GET parametar b koji mora biti broj";
}

