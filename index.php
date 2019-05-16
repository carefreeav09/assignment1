<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Assignment</title>
</head>
<body>
<?php
include_once('./database/connection.php');
?>
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
                $sql = 'SELECT  DISTINCT product_name FROM products WHERE product_id IN(1000,1001, 1002,1003, 1004, 1005)';
                $sql2 = 'SELECT * from products where product_name = "Fish Fingers"';
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card'><div class='card-body'>" . $row[product_name] . "</div></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div id="freshFoodResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'SELECT  DISTINCT product_name FROM products WHERE product_id IN(3000, 3001, 3002, 3003, 3004, 3005, 3006, 3007)';
                $sql2 = 'SELECT * from products where product_name = "Fish Fingers"';
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card' ><div class='card-body'>" . $row[product_name] . "</div></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div id="beveragesResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'SELECT  DISTINCT product_name FROM products WHERE product_id IN(4000, 4001, 4002, 4003, 4004, 4005)';
                $sql2 = 'SELECT * from products where product_name = "Fish Fingers"';
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card'><div class='card-body'>" . $row[product_name] . "</div></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div id="homeResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'SELECT  DISTINCT product_name FROM products WHERE product_id IN(2000, 2001, 2002, 2003, 2004, 2005, 2006)';
                $sql2 = 'SELECT * from products where product_name = "Fish Fingers"';
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card'><div class='card-body'>" . $row[product_name] . "</div></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div id="petFoodResult" class="justify-content-around mt-4" style="display: none">
                <?php
                $sql = 'SELECT  DISTINCT product_name FROM products WHERE product_id IN(5000, 5001, 5002, 5003, 5004)';
                $sql2 = 'SELECT * from products where product_name = "Fish Fingers"';
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card'><div class='card-body'>" . $row[product_name] . "</div></div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>

    </div>


    <div class="col-md-3 p-0 m-0" style="height: 100vh">
        <div class="col-md-12 card" style="height: 50vh">

        </div>

        <div class="col-md-12 card" style="height: 50vh">
            whuu
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>