<?php 

require_once 'OOP/ClassAndObject/class.php';
require_once 'OOP/objectMethods/Car.php';

function debug($data){
    echo '<pre>' . print_r($data, return: 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();
debug($car1);

$car1->color = 'black';
$car1->brand = 'bmw';

$car2->color = 'cian';
$car2->brand = 'lada';

debug($car1);
debug($car2);

echo "<h3> Avto: </h3>
Марка: {$car1->brand}<br>
Цвет:  {$car1->color}<br>
Колеса: {$car1->wheels}<br>
Скорость: {$car1->speed}<br>";
