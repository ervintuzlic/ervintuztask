<?php 

include_once("Product.php");

class Book extends Product {
    public int $weight;

    public function getProduct(){
        return $this;
    }
    public function getWeight(){
        return $this->weight;
    }

    public function setWeight(int $weight){
        return $this->weight=$weight;
    }
}

?>