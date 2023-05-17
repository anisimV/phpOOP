<?php 

require_once 'house.php';

function debug($data){
    echo '<pre>' . print_r($data, return: 1) . '</pre>';
}

echo house::$countHouse;

echo '<br>';

$house1 = new house(1, 2, 'серый', 7);
$house2 = new house(5, 3, 'белый', 5);

echo house::$countHouse;

echo $house1->getHouseInfo();
echo $house2->getHouseInfo();;

echo House::getHouse();
