<?php

class User {

    public $name;
    private $email = 'default';
    protected $discount = 0;
    protected $age;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        //e se qui ci fosse una funzione di 400 righe di codice?!
    }

    public function setAge($age) {
        if (is_numeric($age) && $age >= 0) {
            $this->age = $age;
        }
    }

    //se pensionato, sconto 40%
    public function setDiscount() {
        if ($this->age >= 65) {
            $this->discount = 40;
        }
    }

    /* public function getDiscount() {
        return $this->discount;
    } */

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

}