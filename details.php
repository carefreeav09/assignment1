<?php

include_once('./database/connection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css">

</head>
<body>
<form id="autoSubmit" method="post" action="" >
    <input type="text" value="" id="sessionData" name="sessionData">
    <input type="button" id="clickMe">
</form>
<?php

if (!empty($_POST["sessionData"])) {
   echo $_POST['sessionData'];
} else {
    echo "N0, mail is not set";
}
$sql = 'select * from products where product_id ="' . $_POST['sessionData'] .'"';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'><div class='card-body'>" . $row['product_name'] . "<br>(" . $row['unit_quantity']. ")"."</div></div>";
    }
} else {
    echo "0 results";
}
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        document.getElementById('sessionData').value = window.sessionStorage.getItem('selectedItem');
        document.getElementById('clickMe').click();
        $("#clickMe").on("click", function (event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "details.php",
                sessionData: $("#autoSubmit").serialize(),
                success: function () {
                    alert('successfully submmited');
                }
            });
        });
    });
</script>
</body>
</html>
