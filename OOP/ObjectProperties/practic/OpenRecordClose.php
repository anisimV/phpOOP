<?php 

class OpenRecordClose
{
    public $open;
    public $way;

    public function __construct($way)
    {
        $this->way = $way;
        if(!is_writable($this->way)) {
            echo "Не {$this->way} доступно для записи!";
            exit;
        }
        $this->open = fopen($this->way, 'a');
    }

    public function __destruct()
    {
        fclose($this->open);
    }

    public function recording($str) {
        if (fwrite($this->open, $str . PHP_EOL) === FALSE) {
            echo "Записаь в файл {$this->way} не удалась!";
        }

    }

}
