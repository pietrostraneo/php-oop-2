<?php

    require_once __DIR__.'/petProducts.php';

    class food extends products{

        public $wet_dry;
        public $weight;
        public $expire;

        function __construct($_company,$_name,$_price,$_img,$_wet_dry,$_weight,$_expire){
            
            parent::__construct($_company,$_name,$_price,$_img);
            $this->wet_dry = $_wet_dry;
            $this->weight = $_weight;
            $this->expire = $_expire;

        }

    }

?>