<?php
require_once __DIR__ .'/categories.php';
require_once __DIR__ .'/product.php';
class Type extends Categories{
    public $kind;
    public function __construct($kind) {
        $this-> kind= $kind;
    }
}
?>