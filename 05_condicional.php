<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include("./products.php");
require("./products.php");
require_once("./products.php");

//eliminem el producte amb rating 8
foreach ($products as $product) {
    echo  "<pre>";
    print_R($product);
    echo "</pre>";
}
echo "<h1> Productes sense rating 8</h1>";
foreach ($products as $key => $product) {
    if ($product['rating']==8) {
        unset($products[$key]);
    }
}

foreach ($products as $product) {
    echo  "<pre>";
    print_R($product);
    echo "</pre>";
}





?>
    
</body>
</html>