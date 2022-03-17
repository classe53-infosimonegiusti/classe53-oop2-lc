<?php


class CreditCard {

    protected $expirationMonth;
    protected $expirationYear;
    protected $cvv;
    protected $number;
    public $owner;


    public function getExpirationMonth() {
        return $this->expirationMonth;
    }
    
    public function setExpirationMonth($number) {
        if (is_numeric($number) && $number >= 1 && $number <= 12) {
            $this->expirationMonth = $number;
        }
    }


    public function getExpirationYear() {
        return $this->expirationYear;
    }
    
    public function setExpirationYear($number) {
        if (is_numeric($number) && $number >= 0 && $number <= 99) {
            $this->expirationYear = $number;
        }
    }


    public function getCvv() {
        return $this->cvv;
    }

    public function setCvv($cvv) {
        if (is_numeric($cvv) && $cvv >= 0 && $cvv <= 999) {
            $this->cvv = $cvv;
        }
    }


    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number) {
        if (is_numeric($number) && strlen($number) == 16) {
            $this->number = $number;
        }
    }

    public function isExpired() {

        $expires = DateTime::createFromFormat('m-y', $this->expirationMonth.'-'.$this->expirationYear);
        $now = new DateTime();

        if ($expires < $now)  {
            throw new Exception('La carta di credito è scaduta!!!');
        }


    }

}