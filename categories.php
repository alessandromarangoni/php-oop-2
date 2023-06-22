<?php
require_once __DIR__ .'/product.php';
    class Categories{
        public $categorieName;
        public $description;
        public $icon;
        public function __construct($categorieName,$description, $icon='<i class="fa-solid fa-paw"></i>'){
            $this->categorieName = $categorieName;
            $this->description = $description;
            $this->icon = $icon;
        }
    }
?>