<?php 
class Prodotto{
    public $name;
    public $price;
    public function __construct($name,$price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function formatPrice($price){
        return $price .= ' €';
    }
}
?>