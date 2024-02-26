<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Shope</title>
</head>

<body>
    <div class="contaner">
        <?php
        include("../data/product.php");

        $itemsPages = 10;
        $totalPages = ceil(count($products) / $itemsPages);
        $curPage = isset($_GET["page"]) ? $_GET["page"] : 1;
        $productInPage = array_slice($products, $curPage, $itemsPages);

        foreach ($productInPage as $product) {
            echo "<div class = 'product' data-product-id = {$product["id"]}>";
            echo "<div class = 'image-product'></div>";
            echo "<div class = 'name-product'>{$product["name"]}</div>";
            echo "<div class = 'price-product'>$";
            echo number_format((float)($product["price"]), 2, ".", "");
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="navgation">
        <ul class="navgation-list">
            <?php
            if ($curPage != 1) {
                echo "<li>
                <a href='?page=";
                echo $curPage - 1;
                echo "'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-left' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8' />
                    </svg>&nbsp;Previous
                </a>
            </li>";
            }
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == $curPage) {
                    echo "<li class = 'active'><span>{$i}</span></li>";
                } else {
                    echo "<li><a href='?page={$i}'>{$i}</a></li>";
                }
            }
            if ($curPage != $totalPages) {
                echo "<li>
                    <a href='?page=";
                echo $curPage + 1;
                echo "'>
                    Next
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'>
                            <path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8' />
                        </svg>
                    </a></li>
                ";
            }
            ?>
            <!-- <li>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>&nbsp;Previous
                </a>
            </li>
            <li><a href="?page=1">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href="">5</a></li>
            <li><a href="">6</a></li>
            <li><a href="">7</a></li>
            <li><a href="">8</a></li>
            <li><a href="">9</a></li>
            <li><a href="">10</a></li>
            <li>
                <a href="">Next
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg>
                </a>
            </li> -->
        </ul>
    </div>
</body>

</html>