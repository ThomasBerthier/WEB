function demonstration2() {
    var div = document.getElementById("Root");
    div.addEventListener("mouseover",function() {
        this.style.background = "red";
    }, true)
}