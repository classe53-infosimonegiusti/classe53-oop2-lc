<?php

trait Address {

    public $address;
    public $number;
    public $zip;
    public $city;

    public function getFullAddress() {
        return $this->address . ' ' .  $this->number . ', ' . $this->zip . ', ' . $this->city;
    }

}
