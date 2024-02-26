<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
    ],
    // ... add more products
];

for ($j = 0; $j < 29; $j++) {
    for ($i = 0; $i < 2; $i++) {
        array_push($products, $products[$i]);
    }
}
// echo "<pre>";
// echo print_r($products);
// echo "</pre>";
