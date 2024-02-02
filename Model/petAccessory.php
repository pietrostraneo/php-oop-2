<?php

require_once __DIR__ . '/petProducts.php';

class Accessory extends Product
{

    public $size;
    public $weight;

    function __construct($_company, $_name, $_price, $_breed, $_img, $_size, $_weight)
    {

        parent::__construct($_company, $_name, $_price, $_breed, $_img);
        $this->size = $_size;
        $this->weight = $_weight;
    }
}
