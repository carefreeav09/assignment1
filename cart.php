<?php
include_once('./database/connection.php');

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
//$sql = 'select * from products where product_id ="' . $_POST['data'] .'"';

$checksql = 'select * from cartData where product_id ='. $product_id;
$checksqlResult = $conn->query($sql);

$sql = "insert into cartData (product_id, quantity) values (" . $product_id ." , ".$quantity.")";
$result = $conn->query($sql);
if ($result === TRUE) {
    $sqlCart = 'SELECT cartdata.product_id, product_name, unit_price, SUM(quantity) as quantitySUM FROM cartdata INNER JOIN products ON cartdata.product_id = products.product_id group by products.product_id';
    $resultCart = $conn->query($sqlCart);
    if ($resultCart->num_rows > 0) {
        // output data of each row
        while ($row = $resultCart->fetch_assoc()) {
            echo "<tr>
                   <td>" .
                $row['product_id'] .
                "</td>
                    <td>" .
                $row['product_name'] .
                "</td>
                    <td>" .
                $row['unit_price'] .
                "</td>
                             <td>" .
                $row['quantitySUM'] .
                "</td>
</tr>";
        }

    } else {
        echo "<div class='container m-3 p-3'>
        No items Selected
        </div>";
    }
}
?>