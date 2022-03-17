<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Employee.php';

$utente = new User('Pippo', 'pippo@pippo.it');
$utente->setAge(70);
$utente->setDiscount(); //mi aspetto 40%
$utente->setEmail('ciaociao');


$impiegato = new Employee('Paperino', 'paperino@paperino.it', 4);
$impiegato->setDiscount(); //mi aspetto 15%
//echo $impiegato->getDiscountTest();

$impiegato->getImpiegatoEmail();  //non funziona poichè sto tentando da Employee di accedere ad una proprietà privata di User
echo $impiegato->getEmail(); //funziona poichè getEmail è eraditata da User ed è pubblica


var_dump($utente);
var_dump($impiegato);