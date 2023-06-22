<?php
require_once __DIR__ .'/categories.php';
require_once __DIR__ .'/product.php';
class Food extends Prodotto{
    public $calories;
    public function __construct($name, $price, Categories $Categories, $img, $calories)
	{
		parent::__construct($name, $price, $Categories,$img);
		$this->calories = $calories;
	}
}
?>