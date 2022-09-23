<?php 

abstract class Product {
    public int $id;
    public int $SKU;
    public string $name;
    public int $price;

    abstract function getProduct();
}

?>