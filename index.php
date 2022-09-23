<?php 
    require("models/DVD.php"); 
    require("data/data.php");

    try {
        // Create sql statement
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
    
        // error output
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

    <div class="main-container">
    <div class="container">
    <?php if ($result->rowCount() > 0) : ?>
        <?php foreach ($result as $product) : ?>
            <div class="product" style="border: 1px solid black;">
                <h3><?= $product ['SKU'] ?></h3>
                <p><?=$product ['Name'] ?></p>
                <p><?=$product ['Price'] ?></p>

                <p><?=$product ['Size'] ?></p>
                <p><?=$product ['Weight'] ?></p>
                <p><?=$product ['Height'] ?> <?=$product ['Width'] ?> <?=$product ['Length'] ?> </p>

            </div>

        <?php endforeach ?>
    <?php endif ?>
    </div>
    </div>
</body>
</html>