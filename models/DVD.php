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

    public function insertDataDVD(string $sku, string $name, int $price, int $size){                 
        $conn = new mysqli("localhost", "root", "", "ervintuz");
                    
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO products  (SKU, Name, Price, Size)
        VALUES ('$sku', '$name', '$price', '$size')";

        $conn->query($sql);
        $conn->close();
        header("refresh:0, url=index.php");

    }
}

?>