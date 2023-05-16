<?php 

require_once 'OpenRecordClose.php';

$way = new OpenRecordClose(__DIR__ . '/result.txt');
$way->recording('text');
$way->recording('text');
$way->recording('text');
$way->recording('text');

$res = fopen('result.txt', 'r');


while ( !feof($res) ) {
    echo fgets($res) . "<br>";
}

fclose($res);
