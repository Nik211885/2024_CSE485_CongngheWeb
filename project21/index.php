<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Project21</title>
</head>

<body>
    <div class='container'>

        <?php
        include "data.php";

        // for ($i = 0; $i < 50; $i++) {
        //     foreach ($products as $product) {
        //         echo '<div class ="product">';
        //         echo "<h2> {$product['name']} </h2>";
        //         echo "<h3> {$product['price']} </h3>";
        //         echo "<p> {$product['description']} </p>";
        //         echo '</div>';
        //     }
        // }

        $itemsPerPage = 5; //sl spham trong 1 trang
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; //lay dia chi trang hien tai
        $totalPages = ceil(count($products) / $itemsPerPage); //tong so trang = lam tron len(tong sp / so sp trong trang)

        //chon id spham hien tai cho trang hien tai
        $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
        ?>
    </div>

    <div class='product-list'>
        <?php
        foreach ($currentPageItems as $product) {
            echo '<div class ="product">';
            echo "<h2> {$product['name']} </h2>";
            echo "<h3> {$product['price']} </h3>";
            echo "<p> {$product['description']} </p>";
            echo '</div>';
        }
        ?>
    </div>

    <div class="pagination">
        <?php if ($currentPage > 1) : ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <?php if ($i == $currentPage) : ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else : ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages) : ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>


</body>

</html>