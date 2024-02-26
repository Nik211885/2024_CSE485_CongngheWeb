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
    include "data/products.php";
    
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