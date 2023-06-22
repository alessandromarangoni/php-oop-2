<?php
class Toys extends Prodotto{
    public $color;
    public function __construct($name, $price, Categories $Categories, $img, $color)
	{
		parent::__construct($name, $price, $Categories,$img);
		$this->color = $color;
	}
}
?>