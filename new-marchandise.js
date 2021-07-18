var choicesArray = document.getElementsByClassName("game-choice");

function nameGameImageContainer(imageSource, index) {
    document.getElementById("new-game-image2").style.color = "rgba(0,0,0,0)";
    removeBorders();
    choicesArray[index].style.border = "#feed99 solid";
    setTimeout(setImage(imageSource), 100);
}

function removeBorders() {
    for (var index = 0; index < choicesArray.length; index++) {
        choicesArray[index].style.border = "none";
    }
}

function setImage(imageSource) {
    var mainImage = document.getElementsByClassName("new-game-image")[0];
    mainImage.src = imageSource;
}