<?php 
    require_once("models/DVD.php"); 
    require_once("models/Book.php");
    require_once("models/Furniture.php");
?>

<?php 
            if(!empty($_POST['ProductType'])) {
                $selected = $_POST['ProductType'];
                $SKU = $_POST['SKU']; 
                $Name = $_POST['Name']; 
                $Price = $_POST['Price']; 

                if($selected == "DVD"){
                    $Size = $_POST['Size']; 

                    $dvd = new DVD();
                    
                    $conn = new mysqli("localhost", "root", "", "ervintuz");
                    
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "INSERT INTO products  (SKU, Name, Price, Size)
                    VALUES ('$SKU', '$Name', '$Price', '$Size')";

                    $conn->query($sql);
                    $conn->close();
                    header("refresh:0, url=index.php");
                }

                else if($selected == "Book"){
                    $Weight = $_POST['Weight'];

                    $book = new Book();
                    
                    $conn = new mysqli("localhost", "root", "", "ervintuz");
                    
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "INSERT INTO products  (SKU, Name, Price, Weight)
                    VALUES ('$SKU', '$Name', '$Price', '$Weight')";

                    $conn->query($sql);

                    $conn->close();
                    header("refresh:0, url=index.php");
                }

                else{
                    $Width = $_POST['Width'];
                    $Height = $_POST['Height'];
                    $Length = $_POST['Length'];

                    $furniture = new Furniture();
                    
                    $conn = new mysqli("localhost", "root", "", "ervintuz");
                    
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "INSERT INTO products  (SKU, Name, Price, Height, Width, Length)
                    VALUES ('$SKU', '$Name', '$Price', '$Height', '$Width', '$Length')";

                    $conn->query($sql);

                    $conn->close();
                    header("refresh:0, url=index.php");
                }
            } else {
                echo 'Please select the value.';
            }

?>
<div>
</div>