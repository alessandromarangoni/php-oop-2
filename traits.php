<?php 
trait Materials{
    
    public $material;

    public function getmaterial() {
		return $this->material;
	}

	public function setmaterial($material) {
		$this->material = "$material";
	}
} ?>