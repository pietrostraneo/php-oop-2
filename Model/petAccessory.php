<?php

    require_once __DIR__.'/petProducts.php';

    class accessory extends products{

        public $size;
        public $weight;

        function __construct($_company,$_name,$_price,$_img,$_size,$_weight){
            
            parent::__construct($_company,$_name,$_price,$_img);
            $this->size = $_size;
            $this->weight = $_weight;

        }

    }

?>