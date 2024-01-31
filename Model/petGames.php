<?php

    require_once __DIR__.'/petProducts.php';

    class games extends products{

        public $size;
        public $weight;
        public $sounds;

        function __construct($_company,$_name,$_price,$_img,$_size,$_weight,$_sounds){
            
            parent::__construct($_company,$_name,$_price,$_img);
            $this->size = $_size;
            $this->weight = $_weight;
            $this->sounds = $_sounds;

        }

    }

?>