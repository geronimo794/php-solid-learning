<?php
class VolumeCalculator extends AreaCalculator
{
    public function construct($shapes = [])
    {
        parent::construct($shapes);
    }

	// Sum must be always float, to not break liskove substitution princile
    public function sum():float{
        // logic to calculate the volumes and then return an array of output
		$summedData = 0;
        return $summedData;
    }
}
