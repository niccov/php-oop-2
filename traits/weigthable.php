<?php
trait Weigthable {
    protected $grams;

    public function setGrams(int $grams) {
        
        if($grams > 5000) {

            $this->grams = $grams;
      
        } else {
      
            throw new Exception("Il tuo prodotto pesa un po' troppo");
      
        }
    }

    public function getGrams() {
        return $this->grams;
    }
}