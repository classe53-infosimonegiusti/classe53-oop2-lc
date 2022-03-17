<?php

require_once __DIR__ . '/Genitore.php';

class Figlio extends Genitore {

    public function getAttributoPubblico() {
        return $this->attributoPubblico;
    }

    public function getAttributoProtetto() {
        return $this->attributoProtetto;
    }

    public function getAttributoPrivato() {
        return $this->attributoPrivato;
    }

    public function setAttributoPrivatoDelFiglio($valore) {
        $this->attributoPrivato = $valore;
    }

}