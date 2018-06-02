<?php

$broj=4;

//ovo nije dobro
if($broj>18)
    echo "Punoljetan";

//uvijek koristiti {} 
    if($broj>18)
    {
        echo "Osoba";
        echo "Odrasla";
    }

$uvjet = $broj>18;

//loše jer nema potrebe provjeravati boolean na true/false
if($uvjet==true)
{
    echo "Punoljetan";
}

//dobro
if(!$uvjet)
{
    echo "Punoljetan";
}