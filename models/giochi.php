<?php

   class Giochi extends Product {
     public $caratteristiche;

     function __construct(string $name, string $description, string $price, string $category, string $imgProduct, string $caratteristiche){
        parent::__construct($name, $description, $price, $category, $imgProduct);

        $this->caratteristiche = $caratteristiche;
     }
   }