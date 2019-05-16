function displayFrozenFood() {
    var frozen = document.getElementById('frozenFoodResult');
    if (frozen.style.display === "none") {
        frozen.style.display = "flex";
    } else {
        frozen.style.display = "none";
    }
    document.getElementById('freshFoodResult').style.display = 'none';
    document.getElementById('beveragesResult').style.display = 'none';
    document.getElementById('homeResult').style.display = 'none';
    document.getElementById('petFoodResult').style.display = 'none';

}

function displayFreshFood() {
    var fresh = document.getElementById('freshFoodResult');
    if (fresh.style.display === "none") {
        fresh.style.display = "flex";
    } else {
        fresh.style.display = "none";
    }
    document.getElementById('frozenFoodResult').style.display = 'none';
    document.getElementById('beveragesResult').style.display = 'none';
    document.getElementById('homeResult').style.display = 'none';
    document.getElementById('petFoodResult').style.display = 'none';
}

function displayBeverages() {
    var fresh = document.getElementById('beveragesResult');
    if (fresh.style.display === "none") {
        fresh.style.display = "flex";
    } else {
        fresh.style.display = "none";
    }
    document.getElementById('frozenFoodResult').style.display = 'none';
    document.getElementById('freshFoodResult').style.display = 'none';
    document.getElementById('homeResult').style.display = 'none';
    document.getElementById('petFoodResult').style.display = 'none';
}

function displayHomeHealth() {
    var fresh = document.getElementById('homeResult');
    if (fresh.style.display === "none") {
        fresh.style.display = "flex";
    } else {
        fresh.style.display = "none";
    }
    document.getElementById('frozenFoodResult').style.display = 'none';
    document.getElementById('freshFoodResult').style.display = 'none';
    document.getElementById('beveragesResult').style.display = 'none';
    document.getElementById('petFoodResult').style.display = 'none';

}

function displayPetFood() {
    var fresh = document.getElementById('petFoodResult');
    if (fresh.style.display === "none") {
        fresh.style.display = "flex";
    } else {
        fresh.style.display = "none";
    }
    document.getElementById('frozenFoodResult').style.display = 'none';
    document.getElementById('freshFoodResult').style.display = 'none';
    document.getElementById('beveragesResult').style.display = 'none';
    document.getElementById('homeResult').style.display = 'none';

}

