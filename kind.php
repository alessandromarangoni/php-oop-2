<?php
require_once __DIR__ .'/categories.php';
require_once __DIR__ .'/product.php';
class Food extends Prodotto{
    public $calories;
    public $weight;
    public function __construct($name, $price, Categories $Categories, $img, $calories, $weight=0)
	{
		parent::__construct($name, $price, $Categories,$img);
		$this->calories = $calories;
        $this->weight = $weight;
	}

    public function setweight($value) {
		if($value>=0) {
			$this->weight = $value;
		}
	}

    public function getweight(){
		if(is_null($this->weight)){
			throw new Exception("valore non numerico");
		}
		else if ($this->weight==0) {
			throw new RangeException("peso zero");
		}
		return $this->weight . " kg";
}
}
?>