<?php

//svi parametri preneseni GET metodom
print_r($_GET);


//svi parametri preneseni POST metodom
print_r($_POST);

//svi parametri preneseni GET ili POST metodom
print_r($_REQUEST);

//sve prenesene datoteke
print_r($_FILES);

//opće informacije o okolini
echo "<pre>";
//print_r($_SERVER);
echo "</pre>";


// pohranjeni kolačići na klijentu
print_r($_COOKIE);

session_start();
// podaci na serveru o korisniku
print_r($_SESSION);

$t=66;

// niz s svim varijablama
print_r($GLOBALS);

//
print_r($_ENV);
