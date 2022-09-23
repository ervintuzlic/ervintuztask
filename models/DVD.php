<?php 

include_once("Product.php");

class DVD extends Product {
    public int $size;

    public function getProduct(){
        return $this;
    }
    public function getSize(){
        return $this->size;
    }
    public function setSize(int $size){
        return $this->size=$size;
    }
}

?>