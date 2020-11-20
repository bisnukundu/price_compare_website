<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include("../admin/config/functions.php");
$products = new Main_Functions();
$product_data = $products->show_product('tesco');
$all_products = array(
    'data' => array()
);

foreach ($product_data as $product) {

    $items = array(
        "id" => $product["id"],
        "price" => $product["price"],
        "title" => $product["title"],
        "img" => $product["img"],
    );
    array_push($all_products['data'], $items);
}
$json_data = json_encode($all_products);
echo $json_data;
