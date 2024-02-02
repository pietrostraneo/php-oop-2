<?php

require_once __DIR__ . '/animalBreed.php';

class Product
{

    public $company;
    public $name;
    public $price;
    public $breed;
    public $img;

    function __construct($_company, $_name, $_price, Breed $_breed, $_img)
    {

        $this->company = $_company;
        $this->name = $_name;
        $this->price = $_price;
        $this->breed = $_breed;
        $this->img = $_img;
    }
}
