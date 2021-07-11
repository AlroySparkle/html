function swap() {
    var c1 = document.getElementById("product1");
    if (window.getComputedStyle(c1).display === 'none') {
        document.getElementById("product1").style.display = "grid";
        document.getElementById("product2").style.display = "grid";
        document.getElementById("product3").style.display = "grid";
        document.getElementById("product4").style.display = "grid";
        document.getElementById("product5").style.display = "none";
        document.getElementById("product6").style.display = "none";
        document.getElementById("product7").style.display = "none";
        document.getElementById("product8").style.display = "none";
    } else {

        document.getElementById("product5").style.display = "grid";
        document.getElementById("product6").style.display = "grid";
        document.getElementById("product7").style.display = "grid";
        document.getElementById("product8").style.display = "grid";
        document.getElementById("product1").style.display = "none";
        document.getElementById("product2").style.display = "none";
        document.getElementById("product3").style.display = "none";
        document.getElementById("product4").style.display = "none";
    }
}