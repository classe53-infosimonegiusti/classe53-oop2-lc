<?php 

require_once __DIR__ . '/User.php';

class Employee extends User {

    protected $livello;

    public function __construct($name, $email, $livello)
    {
        //questo è codice ripetuto dalla classe User, e non ci piace
        //$this->name = $name;
        //$this->email = $email;

        //al posto di copia/incolla non manutenibili, chiamo il costruttore della classe padre
        parent::__construct($name, $email);

        //a me basterebbe fare questo...
        $this->livello = $livello;

    }

    public function setLivello($livello) {
        $this->livello = $livello;
    }

    public function setDiscount() {
        $this->discount = $this->livello * 5;
    }

    /* public function getDiscountTest()
    {
        $valore = parent::getDiscount();
        return $valore . ' test';
    } */

    public function getImpiegatoEmail() {
        echo $this->email;
    }

}
