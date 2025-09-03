<?php
echo "<h1>Activity 1: Product catalog for GadgetGrove</h1>";

/* ---------------------------
   Indexed Array
--------------------------- */
$products = ["Laptop", "Smartphone", "Tablet", "Smartwatch"];

echo "<h2>Aa</h2>";
foreach ($products as $product) {
    echo "- $product <br>";
}

echo "<hr>";

/* ---------------------------
   Associative Array
--------------------------- */
$laptop = [
    "name" => "Laptop",
    "price" => 45000,
    "stock" => 12
];

echo "<h3>Associative Array</h3>";
echo "Product: " . $laptop["name"] . "<br>";
echo "Price: ₱" . $laptop["price"] . "<br>";
echo "Stock: " . $laptop["stock"] . " units<br>";

echo "<hr>";

/* ---------------------------
   Multidimensional Array
--------------------------- */
$catalog = [
    "Computers" => [
        ["name" => "Laptop", "price" => 45000],
        ["name" => "Desktop", "price" => 30000]
    ],
    "Mobiles" => [
        ["name" => "Smartphone", "price" => 25000],
        ["name" => "Tablet", "price" => 15000]
    ]
];

echo "<h3>Multidimensional Array</h3>";
foreach ($catalog as $category => $items) {
    echo "<b>$category:</b><br>";
    foreach ($items as $item) {
        echo "- " . $item["name"] . " (₱" . $item["price"] . ")<br>";
    }
}
?>