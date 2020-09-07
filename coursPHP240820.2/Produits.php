<?php
class Produits {
    private $reference;
    private $name;
    private $price;

    private static $remise = 20;  // variable statique

    public function __construct($reference,$name,$price){
        $this->setReference($reference);
        $this->setName($name);
        $this->setPrice($price);
    }

    public function setReference($reference){
        $this->reference = $reference;

    }

    public function getReference($reference){
        return $this->reference;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName($name){
        return $this->name;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice($price){
        return $this->price;
    }

    public static function getRemise(){
        return self::$remise; // permet de recuperer la valeur de la variable statique. le mot-clef self veut dire la valeur courante
    }

    public static function setRemise($remise){
        self::$remise; // fonction pout définir / modifier $remise
    }

    public function getNewPrice(){
        //price*(1 - remise/100);
        return $this->price * (1 - self::$remise/100);
    }

}