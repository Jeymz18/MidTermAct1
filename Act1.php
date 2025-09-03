<?php
echo "<h1>Activity 1: Product catalog for GadgetGrove</h1>";

$products = ["<h3>Product: Laptop, Smartphone, Tablet, Smartwatch, Monitor, System Unit</h3>"];

echo "<h2>Here's our Available Gadgets</h2>";
foreach ($products as $product) {
    echo "$product";
}
echo "<hr>";

$productPrices = [18500, 20500, 42000, 34500];
echo "First product price: ₱" . $productPrices[0] . "<br>";
echo "Last product price: ₱" . $productPrices[3] . "<br>";
echo "<hr>";


$laptop = [
    "name" => "Acer Aspire 5 (A515-56-36UT)",
    "price" => 18500,
    "specs" => "<br>•Intel Core i3 11th Gen<br>•8GB RAM - 256GB SSD<br>•15.6 FHD Display<br>•Windows 11",
    "stock" => 16
];
echo "Product: " . $laptop["name"] . "<br>";
echo "Price: ₱" . $laptop["price"] . "<br>";
echo "Specs: " . $laptop["specs"] . "<br>";
echo "Stock: " . $laptop["stock"] . " units<br><br>";
echo "<hr>";

echo "<h2>Full Catalog</h2>";
$laptop = [
    "name" => "Lenovo IdeaPad 3 (14ITL6)",
    "price" => 20500,
    "specs" => "<br>•Intel Core i3 11th Gen<br>•8GB RAM - 256GB SSD<br>•14 FHD Display<br>•Windows 11",
    "stock" => 6
];
echo "Product: " . $laptop["name"] . "<br>";
echo "Price: ₱" . $laptop["price"] . "<br>";
echo "Specs: " . $laptop["specs"] . "<br>";
echo "Stock: " . $laptop["stock"] . " units<br><br>";



$laptop = [
    "name" => "Apple MacBook Air (M1, 2020)",
    "price" => 42000,
    "specs" => "<br>•Apple M1 Chip<br>•8GB Unified RAM - 256GB SSD<br>•13.3 Retina Display<br>•macOS",
    "stock" => 12
];
echo "Product: " . $laptop["name"] . "<br>";
echo "Price: ₱" . $laptop["price"] . "<br>";
echo "Specs: " . $laptop["specs"] . "<br>";
echo "Stock: " . $laptop["stock"] . " units<br><br>";



$laptop = [
    "name" => "MSI GF63 Thin (11SC)",
    "price" => 34500,
    "specs" => "<br>•Intel Core i5 11th Gen<br>•8GB RAM - 512GB SSD<br>•NVIDIA GTX 1650<br>•15.6 FHD 144Hz Display",
    "stock" => 5
];
echo "Product: " . $laptop["name"] . "<br>";
echo "Price: ₱" . $laptop["price"] . "<br>";
echo "Specs: " . $laptop["specs"] . "<br>";
echo "Stock: " . $laptop["stock"] . " units<br>";
echo "<hr>";
?>