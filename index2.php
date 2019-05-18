<?php
session_start();
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
</head>
<body style="overflow-y: hidden">

<div class="row w-100 m-0">
    <div class="col-md-9 p-0 m-0" style="height: 100vh">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">GROCERY STORE</a>
        </nav>

        <main>
            <img src="img/grocery.png" width="994.5px"  height="300px" alt="grocery" usemap="#groceryMap">

            <map name="groceryMap">
                <area alt="freshFood" target="_blank" shape="rect" coords="30,150,175,250" id="freshFood" onmouseover="displayFreshFood2()">
                <area alt="frozenFood" target="_blank" shape="rect" coords="225,125,385,250" id="frozenFood" onmouseover="displayFrozenFood2()">
                <area alt="homeHealth" target="_blank" shape="rect" coords="420,150,575,250" id="homeHealth" onmouseover="displayHomeHealth2()">
                <area alt="beverages" target="_blank" shape="rect" coords="615,150,765,250" id="beverages" onmouseover="displayBeverages2()">
                <area alt="petFood" target="_blank" shape="rect" coords="810,150,995,250" id="petFood" onmouseover="displayPetFood2()">
            </map>

            <img src="img/freshfood.png" id='freshFoodImg' width="994.5px"  height="300px" alt="grocery" usemap="#freshFoodMap" style="display: none">
            <img src="img/frozenfood.png" id='frozenfoodImg' width="994.5px"  height="300px" alt="grocery" usemap="#frozenfoodMap" style="display: none">
            <img src="img/homehealth.png" id='homeHealthImg' width="994.5px"  height="300px" alt="grocery" usemap="#homeHealthMap" style="display: none">
            <img src="img/beverages.png" id='beveragesImg' width="994.5px"  height="300px" alt="grocery" usemap="#beveragesMap" style="display: none">
            <img src="img/petfood.png" id='petFoodImg' width="994.5px"  height="300px" alt="grocery" usemap="#petFoodMap" style="display: none">

            <map name="freshFoodMap">
                <area alt="freshFood" target="_blank" shape="rect" coords="25,450,175,650" id="freshFood">
            </map>

        </main>
    </div>
</div>


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
    function displayFreshFood2(){
        document.getElementById('freshFoodImg').style.display= 'block';
        document.getElementById('frozenfoodImg').style.display= 'none';
        document.getElementById('homeHealthImg').style.display= 'none';
        document.getElementById('beveragesImg').style.display= 'none';
        document.getElementById('petFoodImg').style.display= 'none';
    }

    function displayFrozenFood2(){
        document.getElementById('freshFoodImg').style.display= 'none';
        document.getElementById('frozenfoodImg').style.display= 'block';
        document.getElementById('homeHealthImg').style.display= 'none';
        document.getElementById('beveragesImg').style.display= 'none';
        document.getElementById('petFoodImg').style.display= 'none';
    }

    function displayHomeHealth2(){
        document.getElementById('freshFoodImg').style.display= 'none';
        document.getElementById('frozenfoodImg').style.display= 'none';
        document.getElementById('homeHealthImg').style.display= 'block';
        document.getElementById('beveragesImg').style.display= 'none';
        document.getElementById('petFoodImg').style.display= 'none';
    }
    function displayBeverages2(){
        document.getElementById('freshFoodImg').style.display= 'none';
        document.getElementById('frozenfoodImg').style.display= 'none';
        document.getElementById('homeHealthImg').style.display= 'none';
        document.getElementById('beveragesImg').style.display= 'block';
        document.getElementById('petFoodImg').style.display= 'none';
    }

    function displayPetFood2(){
        document.getElementById('freshFoodImg').style.display= 'none';
        document.getElementById('frozenfoodImg').style.display= 'none';
        document.getElementById('homeHealthImg').style.display= 'none';
        document.getElementById('beveragesImg').style.display= 'none';
        document.getElementById('petFoodImg').style.display= 'block';
    }

</script>
</body>
</html>
