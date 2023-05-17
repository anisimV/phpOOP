<?php 

class house
{

    public $floor;
    public $rooms;
    public $color;
    public $windows;

    public static $countHouse = 0;

    public function __construct($floor, $rooms, $color,$windows)
    {
        $this->floor = $floor;
        $this->rooms = $rooms;
        $this->color = $color;
        $this->windows = $windows;
        self::$countHouse++;
    }

    public function getHouseInfo() {
        return "<h4>Коротко о доме:<h4>
            Этаж: {$this->floor}<br>
            Кол-во комант:  {$this->rooms}<br>
            Цвет: {$this->color}<br>
            Кол-во окон: {$this->windows}";
    }

    public static function getHouse() 
    {
        return self::$countHouse;
    }
    
}
