<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . "/../traits/weigthable.php";
   class Cibo extends Product {
      use Weigthable;
      
     public $scadenza;

     function __construct(string $name, string $description, string $price, string $category, string $imgProduct, string $scadenza){
        parent::__construct($name, $description, $price, $category, $imgProduct);

        $this->scadenza = $scadenza;
     }
   

     public function getScadenza() {
        return $this->scadenza;
     }

   }  
