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

    public function insertDataFurniture(int $sku, string $name, int $price, int $height, int $width, int $length){
                            
        $conn = new mysqli("localhost", "root", "", "ervintuz");
                    
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO products  (SKU, Name, Price, Height, Width, Length)
        VALUES ('$sku', '$name', '$price', '$height', '$width', '$length')";

        $conn->query($sql);

        $conn->close();
        header("refresh:0, url=index.php");
    }
}

?>