<?php 
class Prodotto{
    public $name;
    public $price;
    public $Categories;
    public $img;
    public function __construct($name,$price, Categories $Categories,$img) {
        $this->name = $name;
        $this->price = $price;
        $this->Categories = $Categories;
        $this->img = $img;
    }
    public function formatPrice($price){
        return $price .= ' €';
    }
}

?>