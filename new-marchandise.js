var choicesArray = document.getElementsByClassName("game-choice");

function nameGameImageContainer(imageSource, index) {
    var mainImage = document.getElementsByClassName("new-game-image")[0];
    mainImage.src = imageSource;
    removeBorders();
    choicesArray[index].style.border = "#feed99 solid";
}

function removeBorders() {
    for (var index = 0; index < choicesArray.length; index++) {
        choicesArray[index].style.border = "none";
    }
}