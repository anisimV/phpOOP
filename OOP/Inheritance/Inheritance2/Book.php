<?php 

class Book extends Product
{

    public $cpu;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Количество страниц: {$this->numPages}<br>";
        return $out;
    }

    public function getCpu()
    {
        return $this->numPages;
    }
}
