<?php 

require_once 'Product.php';
require_once 'Notebook.php';
require_once 'Book.php';

function debug($data) {
    echo '<pre>' . print_r($data) . '</pre>';
}

$book = new Book('Квартеронка', 250, null, 200);
$notebook = new Notebook('Acer', 30000, 'amd');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct();
