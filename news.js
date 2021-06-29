var rightArrow = document.getElementById("rightArrow");
var leftArrow = document.getElementById("leftArrow");
document.getElementById("rightArrow").offsetTop = screen.height * 0.7;
document.getElementById("newImage").src = "\\sources\\newsImage\\1.png";
document.getElementById("newImage").width = screen.width;
document.getElementById("newImage").height = screen.height * 0.8;
var num = 0;

rightArrow.onclick = function() {
    num++;
    document.getElementById("newImage").src = "\\sources\\newsImage\\" + (((Math.abs(num)) % 3) + 1) + ".png";
    document.getElementById("newImage").width = screen.width;
    document.getElementById("newImage").height = screen.height * 0.8;
};

leftArrow.onclick = function() {
    num--;
    if (num < 0)
        num = 2;
    document.getElementById("newImage").src = "\\sources\\newsImage\\" + ((num % 3) + 1) + ".png";
    document.getElementById("newImage").width = screen.width;
    document.getElementById("newImage").height = screen.height * 0.8;
};