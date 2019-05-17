<?php
include_once('./database/connection.php');

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
    }}

