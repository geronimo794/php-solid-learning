<?php
interface ShapeInterface{
	public function area():float;

	// It's wrong and will be violate interface segregation principle
	// public function volume();

}