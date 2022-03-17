<?php

class Product {

    public $name;
    public $description;

    protected $price = 0;
    protected $animals = [];

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if (is_numeric($price) && $price >= 0 ) {
            $this->price = $price;
        }
    }

    public function getAnimals() {
        return $this->animals;
    }

    public function setAnimals($array) {
        if (is_array($array)) {
            $this->animals = $array;
        }
    }

}