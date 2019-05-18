<?php
session_start();
$cartDataArray = [];
$_SESSION['cart'] = $cartDataArray;
include_once('./database/connection.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Assignment</title>
    <script>
        window.localStorage.clear();
    </script>
</head>
<body style="overflow-y: hidden">

<div class="row w-100 m-0">
    <div class="col-md-9 p-0 m-0" style="height: 100vh">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">GROCERY STORE</a>
        </nav>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="w-100 d-flex justify-content-center">
                    <div class="card" style="width: 8rem">
                        <div class="card-body">
                            Categories
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        onmouseover="showFrozenFoods()" onmouseout="hideFrozenFoods()"-->
        <div class="d-flex justify-content-around mt-4">
            <div class="card" style="width: 10rem" id="frozenFood" onmouseover="displayFrozenFood()">
                <div class="card-body">
                    Frozen Food
                </div>
            </div>

            <div class="card" style="width: 10rem" id="freshFood" onmouseover="displayFreshFood()">
                <div class="card-body">
                    Fresh Food
                </div>
            </div>

            <div class="card" style="width: 10rem" id="beverages" onmouseover="displayBeverages()">
                <div class="card-body">
                    Beverages
                </div>
            </div>
            <div class="card" style="width: 10rem" id="homeHealth" onmouseover="displayHomeHealth()">
                <div class="card-body">
                    Home Health
                </div>
            </div>

            <div class="card" style="width: 10rem" id="petFood" onmouseover="displayPetFood()">
                <div class="card-body">
                    Pet Food
                </div>
            </div>

        </div>

        <div class="container">
            <div id="frozenFoodResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'select * from products where product_id IN(1000,1001, 1002,1003, 1004, 1005)';
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card clickable' onclick=setSession(" . (int)$row['product_id'] . ") id='" . $row['product_id'] . "'><div class='card-body'>" . $row['product_name'] . "<br>(" . $row['unit_quantity'] . ")" . "</div></div>";

                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div id="freshFoodResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'SELECT * FROM products WHERE product_id IN(3000, 3001, 3002, 3003, 3004, 3005, 3006, 3007)';
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card clickable' onclick='setSession(" . $row['product_id'] . ")' id='" . $row['product_id'] . "'><div class='card-body'>" . $row['product_name'] . "<br>(" . $row['unit_quantity'] . ")" . "</div></div>";

                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div id="beveragesResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'SELECT * FROM products WHERE product_id IN(4000, 4001, 4002, 4003, 4004, 4005)';
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card clickable' onclick='setSession(" . $row['product_id'] . ")' id='" . $row['product_id'] . "'><div class='card-body'>" . $row['product_name'] . "<br>(" . $row['unit_quantity'] . ")" . "</div></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div id="homeResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'SELECT  * FROM products WHERE product_id IN(2000, 2001, 2002, 2003, 2004, 2005, 2006)';
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card clickable' onclick='setSession(" . $row['product_id'] . ")' id='" . $row['product_id'] . "'><div class='card-body'>" . $row['product_name'] . "<br>(" . $row['unit_quantity'] . ")" . "</div></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div id="petFoodResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'SELECT  * FROM products WHERE product_id IN(5000, 5001, 5002, 5003, 5004)';
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card clickable' onclick=setSession(" . (int)$row['product_id'] . ") id='" . $row['product_id'] . "'><div class='card-body'>" . $row['product_name'] . "<br>(" . $row['unit_quantity'] . ")" . "</div></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-3 p-0 m-0" style="height: 100vh">
        <div class="col-md-12 card selectedDataResult p-3" style="height: 50vh">
            No Items Selected
        </div>

        <div class="col-md-12 card " style="height:50vh; overflow-y: auto">
            <h6 class="text-center font-weight-bold">Shopping Cart</h6>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody class="cartData">

                </tbody>
                <tfoot>

                </tfoot>
            </table>
            <div class="btn-group">
                <button class='cleanCart btn btn-danger d-inline-flex w-50 white-text'>Clear Cart</button>
                <button type='button' data-toggle="modal" data-target="#checkoutModal" class='checkoutBtn btn btn-primary ml-2 d-inline-flex w-50'>Checkout</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>

                    </thead>
                    <tbody class="checkoutData">
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4" class="pull-right text-right float-right" style="width: max-content">
                            Total : <span id="total"></span>
                        </td>
                    </tr>
                    </tfoot>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emailModal">Proceed to checkout</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Enter Customer Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="submitMail">
                    <input type="text" id="name" class="form-control" placeholder="Enter Name" required>
                    <input type="text" id="address" class="form-control mt-1" placeholder="Enter address" required>
                    <input type="text" id="suburb" class="form-control mt-1" placeholder="Enter suburb" required>
                    <input type="text" id="state" class="form-control mt-1" placeholder="Enter state" required>
                    <input type="text" id="country" class="form-control mt-1" placeholder="Enter country" required>
                    <input type="email" id="email" class="form-control mt-1" placeholder="Enter email" required>
                    <input type="button" class="btn btn-primary mt-2" value="Purchase." id="submit">
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {

        $("#submit").click(function(event) {
            event.preventDefault();
            var name = $("#name").val();
            var address = $("#address").val();
            var suburb = $("#suburb").val();
            var state = $("#state").val();
            var country = $("#country").val();
            var email = $("#email").val();
            $.ajax({
                type: "POST",
                url: "mail.php",
                data : {name: name, address: address,suburb:suburb, state:state, country:country,email:email },
                success: function (response) {
                    $("#checkoutModal").modal('toggle');
                    $("#emailModal").modal('toggle');
                    window.localStorage.clear();
                    $(".cartData").html("<h4>No Data are present</h4>")

                }
            });
        });



        $(".checkoutBtn").click(function () {
            var localstorageData = JSON.parse(window.localStorage.getItem('cartArray'));
            console.log(localstorageData);
            var html = '';
            var priceCount = 0;
            for(var i =0 ; i < localstorageData.length; i++)
            {
                html = html + "<tr>" +
                    "<td>" + localstorageData[i][0]+ "</td>" +
                    "<td>" +localstorageData[i][2] + "</td>" +
                    "<td>" + localstorageData[i][1] + "</td>" +
                    "<td>" + localstorageData[i][3] + "</td>" +
                    "</tr>";
                priceCount = priceCount + parseFloat(localstorageData[i][3]);

                console.log(html);
            }
            $('#total').html(priceCount);

            $('.checkoutData').append(html);
        });


        $(".cleanCart").click(function () {
            $.ajax({
                type: "GET",
                url: "cartCart.php",
                success: function (data) {
                    $(".cartData").html(data)
                }
            });
        });


        $(".clickable").click(function () {
            var selectedData = $(this).attr('id');
            $.ajax({
                type: "POST",
                data: {data: selectedData},
                url: "details.php",
                success: function (data) {
                    $(".selectedDataResult").html(data)
                }
            });
        });
    });

    $(document).on('click', '.addToCart', '.quantity', function () {
        var addedToCart = $('.addToCart').attr('id');
        var quantity = $('.quantity').val();
        var productName = $('.productName').val();
        var price = $('.price').val();

        if(quantity != null && quantity < 21) {
            $.ajax({
                type: "POST",
                data: {product_id: addedToCart, quantity: quantity, productName: productName, price: price},
                url: "newCart.php",
                success: function (data) {
                    var js_array = JSON.parse(data);
                    window.localStorage.setItem('cartArray', JSON.stringify(js_array) );
                    var html = '';
                    for(var i =0 ; i < js_array.length; i++)
                    {
                        html = "<tr>" +
                            "<td>" +js_array[i][2] + "</td>" +
                            "<td>" + js_array[i][1] + "</td>" +
                            "<td>" + js_array[i][3] + "</td>" +
                            "</tr>"
                    }
                    $('.cartData').append(html);

                }
            });
        }
        else{
            alert('Invalid Quantity Entry');
        }
    })
</script>
</body>
</html>