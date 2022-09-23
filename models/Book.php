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

    public function insertDataBook(string $sku, string $name, int $price, int $weight){
        $conn = new mysqli("localhost", "root", "", "ervintuz");
            
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO products  (SKU, Name, Price, Weight)
        VALUES ('$sku', '$name', '$price', '$weight')";

        $conn->query($sql);
        $conn->close();
        header("refresh:0, url=index.php");
    }
}

?>