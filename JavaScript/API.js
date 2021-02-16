function demonstration2() {
    var div = document.getElementById("Root");
    div.addEventListener("click",function() {
        this.style.background = "red";
        this.innerHTML = "Rouge";
    }, true)
}

function demonstration2bis() {
    var div = document.getElementsByName("Test");
    var nbdiv = 1;
    div.forEach(element => {
        element.innerHTML = "Je suis la div"+nbdiv;
        nbdiv+=1;
    });
}