<?php

class Square implements ShapeInterface{
	public $length;

	public function __construct($length) {
		$this->length = $length;
	}
	public function area(): float{
		return pow($this->length, 2);
	}
}
