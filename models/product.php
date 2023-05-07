<?php

   class Product {
      protected $name;
      protected $description;
      protected $price;
      protected $category;
      protected $imgProduct;

    
      function __construct(string $name, string $description, string $price, string $category, string $imgProduct){
         $this-> name = $name;
         $this-> description = $description;
         $this-> price = $price;
         $this-> category = $category;
         $this-> imgProduct = $imgProduct;
      }

      public function getName() {
         return $this->name;
      }

      public function getDescription() {
         return $this->description;
      }
     
      public function getPrice() {
         return $this->price;
      }
     
      public function getCategory() {
         return $this->category;
      }

      public function getImgProduct() {
         return $this->imgProduct;
      }
   }
