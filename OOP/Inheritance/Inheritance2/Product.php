<?php 

class Product
{
    public $name;
    public $price;
//    public $discount = 0;
    private $discount = 0;
//    protected $discount = 0;


    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price; 
    }
    
    public function getProduct()
    {
        return "<hr><b>О товаре:</b><br>
            Наименование: {$this->name}<br>
            Цена: {$this->getPrice()}<br>
            Прежняя цена: {$this->price}<br>";
            
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function setDiscount(int $discount)
    {
        $this->discount = $discount;

        return $this;
    }
}
