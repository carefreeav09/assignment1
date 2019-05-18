<?php
session_start();
include_once('./database/connection.php');

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$productName = $_POST['productName'];
$price = $_POST['price'];
$cartData = [$product_id, $quantity, $productName, $price];
array_push($_SESSION['cart'], $cartData);
echo json_encode($_SESSION['cart']);
?>

