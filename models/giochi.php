<?php

require_once __DIR__ . "/../traits/weigthable.php";
   class Giochi extends Product {
      use Weigthable;
      
     public $caratteristiche;

     function __construct(string $name, string $description, string $price, string $category, string $imgProduct, string $caratteristiche){
        parent::__construct($name, $description, $price, $category, $imgProduct);

        $this->caratteristiche = $caratteristiche;
     }

     public function getCaratteristiche() {
      return $this->caratteristiche;
   }
   }