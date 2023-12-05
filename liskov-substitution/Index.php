<?php
require_once('ShapeInterface.php');
require_once('Circle.php');
require_once('Square.php');
require_once('AreaCalculator.php');
require_once('VolumeCalculator.php');
require_once('SumCalculatorOutputter.php');

$shapes = [
	new Circle(2),
	new Square(5),
	new Square(6)
];

$solidShapes = [
	new Circle(2),
	new Square(5),
	new Square(6)
];

// Calculationg process
$areas = new AreaCalculator($shapes);
$volumes = new VolumeCalculator($solidShapes);

$output = new SumCalculatorOutputter($areas);
$outputVolume = new SumCalculatorOutputter($volumes);

echo $output->HTML();
echo $output->JSON();

echo $outputVolume->HTML();
echo $outputVolume->JSON();
