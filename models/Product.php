<?php 

abstract class Product {
    public int $id;
    public string $SKU;
    public string $name;
    public int $price;

    abstract function getProduct();
}

?>