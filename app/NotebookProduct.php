<?php

namespace app;

use ia\interfaces\IGadget;
use ia\Product;
use ia\traits\TColor;

class NotebookProduct extends Product implements IGadget
{
    use TColor;
    public $cpu;

    public function __construct($name, $price, $cpu = null) {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getProduct(): string
    {
        $out = parent::getProduct();
        return $out . "<br>Процессор: {$this->cpu}";
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function addProduct($name, $price)
    {
        // TODO: Implement addProduct() method.
    }

    public function getCase()
    {
//        echo "Купите чехол для ноутбука {$this->getName()} <br>
//             на базе процессора {$this->cpu}";
    }


}