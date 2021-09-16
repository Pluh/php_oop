<?php

namespace app;

use ia\interfaces\I3D;
use ia\Product;

class BookProduct extends Product implements I3D
{

    public $numPages;

    public function __construct($name, $price, $numPages = null) {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(20);
    }

    public function TEST() {

    }

    public function getProduct(): string
    {
        $out = parent::getProduct();
        $out .= "<br>Цена без скидки: {$this->price}";
        $out .= "<br>Скидка: {$this->getDiscount()}%";
        $out .= "<br>Кол-во страниц: {$this->numPages}";

        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    function addProduct($name, $price)
    {
        // TODO: Implement addProduct() method.
    }


}