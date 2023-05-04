<?php

   class Cibo extends Product {
     public $scadenza;

     function __construct(string $name, string $description, string $price, string $category, string $imgProduct, string $scadenza){
        parent::__construct($name, $description, $price, $category, $imgProduct);

        $this->scadenza = $scadenza;
     }
   }


