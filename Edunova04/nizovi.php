<?php


//indeksi niz s inicijalnim punjenjem
$indeksniNiz = array(2,3,2,2,2,3,4); //7 elemenata

print_r($indeksniNiz);

//ispis elementa niza na indeksu
echo $indeksniNiz[1];

$indeksniNiz[]=5; //8. element

print_r($indeksniNiz);

//asocijativni niz
$asocijativniNiz = array("prvi"=>5, "TT"=> "Dobro", 78=> true);

print_r($asocijativniNiz);


//mješovito
$mjesovitiNiz = array(2,3,"kljuc"=>"vrijenost",44);

print_r($mjesovitiNiz);

//primjer iz baze

$smjerovi = array (
    array("id"=>1, "naziv"=> "Web programer", "cijena"=>4999.99),
    array("id"=>2, "naziv"=> "Java programer", "cijena"=>5999.99)
);

echo $smjerovi[1]["naziv"];

print_r($smjerovi);
//Definirati niz koji te opisuje

$opis = array(
    "ime"=> "Tomislav",
    "Prezime"=> "Jakopec",
    "godina" => 38,
    "mjesto" => array(
        "naziv"=>"Osijek",
        "pp"=>31000
    )
);


//u navedeni niz dodaj mjesto u kojem živiš. Mjesto ima naziv i poštanski broj





