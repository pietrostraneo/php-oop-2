<?php

require_once __DIR__ . '/petProducts.php';

class Game extends Product
{

    public $size;
    public $weight;
    public $sounds;

    function __construct($_company, $_name, $_price, $_breed, $_img, $_size, $_weight, bool $_sounds)
    {

        parent::__construct($_company, $_name, $_price, $_breed, $_img);
        $this->size = $_size;
        $this->weight = $_weight;
        $this->sounds = $_sounds;
    }
}
