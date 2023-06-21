<?php
require __DIR__ .'/product.php';
    class Categories extends Prodotto{
        public $categorieName;
        public $description;
        public function __construct($categorieName,$description){
            $this->categorieName = $categorieName;
            $this->description = $description;
        }
    }
?>