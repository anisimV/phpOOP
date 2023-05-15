<?php 

require_once 'Dogs.php';

function debug($data){
    echo '<pre>' . print_r($data, return: 1) . '</pre>';
}

$dog1 = new Dogs();
$dog2 = new Dogs();
debug($dog1);

$dog1->color = 'black';
$dog1->breed = 'poodle';
$dog1->wool = 'Yes';

$dog2->color = 'brown';
$dog2->breed = 'foxterrier';
$dog2->wool = 'No';

debug($dog1);
debug($dog2);

echo $dog1->getDogInfo();

echo $dog2->getDogInfo();
