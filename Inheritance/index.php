<?php

require_once './src/Circle.php';
require_once './src/Rectangle.php';

$circle = new Circle(5);
echo "Area of the circle: " . $circle->calculateArea() . "\n";


$rectangle = new Rectangle(4, 6);
echo "Area of the rectangle: " . $rectangle->calculateArea() . "\n";

?>