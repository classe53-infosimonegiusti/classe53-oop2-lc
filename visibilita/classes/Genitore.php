<?php

class Genitore {

    public $attributoPubblico;
    protected $attributoProtetto;
    private $attributoPrivato;

    public function __construct($valorePrivato)
    {
        $this->setAttributoPrivato($valorePrivato);
    }

    public function setAttributoPubblico($valore) {
        $this->attributoPubblico = $valore;
    }

    public function setAttributoProtetto($valore) {
        $this->attributoProtetto = $valore;
    }

    public function setAttributoPrivato($valore) {
        if (is_numeric($valore)) {
            $this->attributoPrivato = $valore;
        } else {
            $this->attributoPrivato = 0;
        }
    }

}