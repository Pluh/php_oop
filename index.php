<?php

//error_reporting(-1);

require_once __DIR__ . "/vendor/autoload.php";

use app\BookProduct;
use app\NotebookProduct;
use ia\interfaces\IGadget;


function debug($x) {
    echo "<pre>" . print_r($x, 1) . "</pre>";
}

$notebook1 = new NotebookProduct("MSI Prestige 15", 94000, "Intel i5");

$book1 = new BookProduct("Три мушкетёра", 500, "1105");

function offerCase(IGadget $product) {
        echo "Купите чехол для ноутбука {$product->getName()} <br>
             на базе процессора {$product->cpu}";
}

echo $book1->getProduct();

