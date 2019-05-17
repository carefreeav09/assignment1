<?php
include_once('./database/connection.php');

$sqlCart = 'delete from cartData';
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
            $row['quantity'] .
            "</td>
</tr>";
    }}
else{
    echo "<tr><td colspan='4'>NO DATA IN THE CART</td></tr>";
}

