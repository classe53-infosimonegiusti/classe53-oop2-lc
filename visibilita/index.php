<?php

require_once __DIR__ . '/classes/Genitore.php';
require_once __DIR__ . '/classes/Figlio.php';

$istanzaGenitore = new Genitore('valore_3');
$istanzaGenitore->setAttributoPubblico('valore_1');
$istanzaGenitore->setAttributoProtetto('valore_2');
$istanzaGenitore->setAttributoPrivato('valore_3');

$istanzaFiglio = new Figlio('valore_3');
$istanzaFiglio->setAttributoPubblico('valore_figlio_1');
$istanzaFiglio->setAttributoProtetto('valore_figlio_2');
$istanzaFiglio->setAttributoPrivato('valore_figlio_3');

$istanzaFiglio->setAttributoPrivatoDelFiglio('ciaociao');

echo $istanzaFiglio->getAttributoPrivato();

var_dump($istanzaFiglio);