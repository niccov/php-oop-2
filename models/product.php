<?php

   class Product {
      public $name;
      public $description;
      public $price;
      public $category;
      public $imgProduct;

    
      function __construct(string $name, string $description, string $price, string $category, string $imgProduct){
         $this-> name = $name;
         $this-> description = $description;
         $this-> price = $price;
         $this-> category = $category;
         $this-> imgProduct = $imgProduct;
       }
   }
