<?php
include_once('./database/connection.php');

$sql = 'select * from products where product_id ="' . $_POST['data'] .'"';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class=''>
                <div class=''>" .
            " <h4 class='font-weight-bold d-inline-block'>" .  $row['product_name'] . "</h4>" .
            "<p> Product ID : " . $row['product_id']. "</p>" .
            "<p> Price : " . $row['unit_price']. "</p>" .
            "<p> Quantity : " . $row['unit_quantity']. "</p>" .
            "<p> Stock : " . $row['in_stock']. "</p>" .
            "<input type='hidden' value='" .  $row['product_name'] . "(". $row['unit_quantity'] . ")" . "' class='productName'>" .
            "<input type='hidden' value='" .  $row['unit_price'] . "' class='price'>" .
            "<input name='quantity' class='form-control d-inline-block quantity' placeholder='Please Enter Quantity' required min='0' max='20'/>".
            "<button class='btn btn-success addToCart d-inline-block mt-2' id='".$row['product_id']."'> Add To Cart </button>" .
            "</div></div>";
    }
} else {
    echo "<div class='container m-3 p-3'>
        No items Selected
        </div>";
}
?>