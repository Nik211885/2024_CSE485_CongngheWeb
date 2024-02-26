<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Products</title>
</head>
<body>
    <?php
    $products = [
        [
            "id" => 1,
            "name" => "T-shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-shirt"
        ],
        [
            "id" => 2,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean"
        ],
        [
            "id" => 3,
            "name" => "Jacket",
            "price" => 50.99,
            "description" => "A comfortable and stylish Jacket"
        ],
        [
            "id" => 4,
            "name" => "Short",
            "price" => 12.99,
            "description" => "A comfortable and stylish Short"
        ],
        [
            "id" => 5,
            "name" => "Coat",
            "price" => 60.99,
            "description" => "A comfortable and stylish Coat"
        ],
    ];
    // echo '<div class="container">';
    // foreach ($products as $product){
    //     echo '<div class="product">';
    //     echo "<h2> {$product['name']} </h2>";
    //     echo "<p> {$product['price']} </p>";
    //     echo "<p> {$product['description']} </p>";
    //     echo '</div>';
    // }
    // echo '</div>';

    $itemsPerPage = 1;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
    ?>
    <div class="product-list">
        <?php foreach ($currentPageItems as $product): ?>
            <div class="product">
                <div class=contain-img>
                    <div class ="product-img">ảnh sản phẩm</div>            
                </div>
                <?php
                echo "<h2> {$product['name']} </h2>";
                echo "<p> {$product['price']} </p>";
                echo "<p> {$product['description']} </p>";
                ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>

</body>
</html>