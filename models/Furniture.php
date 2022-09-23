<?php 

include_once("Product.php");

class Furniture extends Product {
    public int $width;
    public int $height;
    public int $length;

    public function getProduct(){
        return $this;
    }

    public function getFurniture(){
        return $this->height + "x" + $this->width + "x" + $this->length;
    }

    public function setFurniture(int $height, int $width, int $length){
        return $this->width=$width && $this->height=$height && $this->length=$length;
    }
}

?>