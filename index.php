<?php 
    require("models/DVD.php"); 
    require("data/data.php");

    try {
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
    
    } catch (Exception $e) {
        echo "Error " . $e->getMessage(); 
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <form action="add.php">
    <button>Add Product</button>
    </form>
    <div>
        <button type="button" id="delete">Mass Delete</button>
    </div>


    <div class="main-container">
        <div class="container">
        <?php if ($result->rowCount() > 0) : ?>
            <?php foreach ($result as $product) : ?>
                <div class="product ajax-del" style="border: 1px solid black;">
                    <input type="checkbox" id="<?php echo $product['Id'] ?>" name="Id"></<input>
                    <h3>SKU: <?= $product ['SKU'] ?></h3>
                    <p>Name: <?= $product ['Name'] ?></p>
                    <p>Price: <?= $product ['Price'] ?>$</p>

                    <?php if($product ['Size']!=null) : ?>
                        <p>Size: <?=$product ['Size']?>MB</p>
                    <?php endif ?>

                    <?php if($product ['Weight']!=null) : ?>
                        <p>Weight: <?=$product ['Weight'] ?>KG</p>
                    <?php endif ?>

                    <?php if($product ['Height']!=null) : ?>
                        <p>Dimension:<?=$product ['Height'] ?>x<?=$product ['Width'] ?>x<?=$product ['Length'] ?></p>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        <?php endif ?>
        </div>
    </div>


</body>
<footer>
    <script src="scripts/jquery-3.2.1.min.js"></script>
    <script src="scripts/script.js"></script>
</footer>
</html>