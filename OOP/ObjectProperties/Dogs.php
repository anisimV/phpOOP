<?php 

class Dogs
{

    public $color;
    public $breed;
    public $speed = 10;
    public $wool;

    public function __construct($color, $breed, $speed, $wool)
    {
        $this->color = $color;
        $this->breed = $breed;
        $this->speed = $speed;
        $this->wool = $wool;
    }

    public function getDogInfo() {
        return "<h3> Собака: </h3>
            Порода: {$this->breed}<br>
            Цвет:  {$this->color}<br>
            Скорость: {$this->speed}<br>
            Шесть: {$this->wool}";

    }

    public function __destruct()
    {
        
    }

}