<?php

   class Cucce extends Product {
     public $dimensione;

     function __construct(string $name, string $description, string $price, string $category, string $imgProduct, string $dimensione){
        parent::__construct($name, $description, $price, $category, $imgProduct);

        $this->dimensione = $dimensione;
     }
   }