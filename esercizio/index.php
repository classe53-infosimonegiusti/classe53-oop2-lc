<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';


$myuser = new User('simone', 'giusti', 'info@simonegiusti.it');

$myCreditCard = new CreditCard();
$myCreditCard->setExpirationMonth('04');
$myCreditCard->setExpirationYear('21');
$myCreditCard->setCvv('123');
$myCreditCard->setNumber('4242424242424242');
$myCreditCard->owner = "Simone Giusti";

try {
    $myCreditCard->isExpired();
    $myuser->setCreditCard($myCreditCard);
} catch (Exception $e) {
    echo $e->getMessage();
}


var_dump($myuser);