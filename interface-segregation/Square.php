<?php

class Square implements ShapeInterface, ManageShapeInterface{
	public $length;

	public function __construct($length) {
		$this->length = $length;
	}
	public function area(): float{
		return pow($this->length, 2);
	}
	public function calculate()
    {
        return $this->area();
    }

}
