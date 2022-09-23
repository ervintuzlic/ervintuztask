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
                    $dvd->insertDataDVD($SKU, $Name, $Price, $Size);
                }

                else if($selected == "Book"){
                    $Weight = $_POST['Weight'];
                    $book = new Book();
                    $book->insertDataBook($SKU, $Name, $Price, $Weight);
                }

                else{
                    $Width = $_POST['Width'];
                    $Height = $_POST['Height'];
                    $Length = $_POST['Length'];
                    $furniture = new Furniture();
                    $furniture->insertDataFurniture($SKU, $Name, $Price, $Height, $Width, $Length);
                }
            } else {
                echo 'Please select the value.';
            }

?>
<div>
</div>