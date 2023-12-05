<?php
class Cuboid implements ShapeInterface, ThreeDimensionalShapeInterface, ManageShapeInterface
{
    public function area():float{
		// calculate the surface area of the cuboid
		return 0;
	}

    public function volume():float{
        // calculate the volume of the cuboid
		return 0;
    }
	public function calculate()
    {
        return $this->area();
    }

}
