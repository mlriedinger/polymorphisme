<?php

// Exercice 1

// require ('overloading.php');

// $object = new Message();
// $object->displayMessage('Hello');

// Exercice 2

require ('shape.php');

function calculatePrice(Rectangle $shape) {
    return $shape->getArea() * 15;
}

$rect = new Rectangle(9,4);
$circle = new Circle(4);

echo '<p>La surface du rectangle est : ' . $rect->getArea() . '</p>';
echo '<p>Le prix du rectangle est : ' . calculatePrice($rect) . '</p>';
// echo '<p>La surface du cercle est : ' . $circle->getArea() . '</p>';
// echo '<p>Le prix du rectangle est : ' . calculatePrice($circle) . '</p>';

?>

