<?php

require ('shape.php');
require ('overloading.php');

$object = new Message();
$object->displayMessage('Hello');


function calculatePrice(Shape $shape) {
    return $shape->getArea() * 15;
}

$rect = new Rectangle(9,4);
$circle = new Circle(4);

echo '<p>La surface du rectangle est : ' . $rect->getArea() . '</p>';
echo '<p>Le prix du rectangle est : ' . calculatePrice($rect) . '</p>';
echo '<p>La surface du cercle est : ' . $circle->getArea() . '</p>';
echo '<p>Le prix du rectangle est : ' . calculatePrice($circle) . '</p>';

?>