<?php 
trait Materials{
    public $material;
    
    public function getmaterial() {
		if(is_null($this->material)){
			throw new Exception("ri è rotto");
        }
		return $this->material;
	}

	public function setmaterial($material) {
		$this->material = "$material";
	}
} ?>