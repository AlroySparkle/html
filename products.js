var x = 1;

function swap(direction) {
    //left -1 right 1 for direction
    x += direction;
    if (x > 2) {
        x = 0;
    } else if (x < 0) {
        x = 2
    }
    document.getElementsByClassName("hide-product")[0].style.visibility = "visible";
    document.getElementsByClassName("hide-product")[0].style.backgroundColor = "rgba(255,255,255,1)";
    setTimeout(changeImages, 300);
    //hide the div to not be a struggling click and hover
    setTimeout(visibleHide, 500);
}
//used to rehide the div after finish
function visibleHide() {
    document.getElementsByClassName("hide-product")[0].style.visibility = "hidden";
}

function changeImages() {
    var images = document.getElementsByClassName("product-image");
    for (var image = 0; image < images.length; image++) {
        images[image].src = "/sources/newsImage/" + (1 + x) + ".png";
    }
    document.getElementsByClassName("hide-product")[0].style.backgroundColor = "rgba(255,255,255,0)";
}