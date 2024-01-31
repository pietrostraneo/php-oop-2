<?php 

    require_once __DIR__.'/animalBreed.php';

    class products{

        public $company;
        public $name;
        public $price;
        public $img;

        function __construct($_company,$_name,$_price,$_img){

            $this->company = $_company;
            $this->name = $_name;
            $this->price = $_price;
            $this->img = $_img;
            
        }

    }

?>