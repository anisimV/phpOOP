<?php 

require_once 'product.php';

function debug($data) {
    echo '<pre>' . print_r($data) . '</pre>';
}

$book = new Product('Квартеронка', 250, null, 200);
$notebook = new Product('Acer', 30000, 'amd');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct();