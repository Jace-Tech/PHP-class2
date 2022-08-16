<!-- Include the product.php to index.php -->
<?php include("./util/product.php"); ?>

<!-- You can uncomment this code to verify -->
<?php // print_r($products);  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="product-container">
        <!-- 
            USING THE DATA PROVIDED IN THE PRODUCTS ARRAY 
            
            - Loop through the array and then display the product card below with the appropriate data from the array.
        -->
        <?php foreach($products as $product){ ?>
            <div class="product-card">
                <!-- The image from the product array should show replace this dummy image here -->
                <img src="./img/<?= $product['image'] ?>" class="product-image" alt="iphone">

                <div class="product-body">
                    <!-- The title from the product array should show replace this dummy title here -->
                    <h3 class="product-title"><?= $product['title'] ?></h3>

                    <!-- The description from the product array should show replace this dummy description here -->
                    <p class="product-description">
                        <?=  $product['description'] ?>
                    </p>

                    <!-- The price from the product array should show replace this dummy price here -->
                    <h4 class="product-price">&#8358; <?= $product['price'] ?></h4>

                    <!-- The id from the product array should show replace this dummy data-id here -->
                    <div class="mt-4">
                        <button data-id="<?= $product['id'] ?>" class="product-btn">Add to cart</button>
                    </div>
                </div>
            </div>
        <?php } ?>


        <!-- 
                RESULT 

                The result should be a HTML page having three product items, and those items should be what we have in the $products array
             -->

    </div>
</body>

</html>