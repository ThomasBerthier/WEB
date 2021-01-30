let a = 3,
    b = 2;
function exo1(){

    const button = document.getElementById("Rectangle");
    button.addEventListener("click", function(){
        let Longueur = prompt("Entrez une longueur");
        let Largeur = prompt("Entrez une largeur");

        if (!isNaN(Largeur)) {
            Largeur = parseInt(Largeur, 10);
        } else return alert("Not a number");

        if (!isNaN(Longueur)) {
            Longueur = parseInt(Longueur, 10);
        } else return alert("Not a number");

        const aire = Longueur * Largeur;
        const perim = (Longueur + Largeur) * 2 ;
        alert("Aire = " + aire + " et Perimetre = " + perim);
    }, true);
    
}

function exo2() {

    document.getElementById("Circle")
    .addEventListener('click',function(){
    let Longueur = prompt("Entrez une longueur");

    if(!isNaN(Longueur)) {
        Longueur = parseInt(Longueur, 10);
    } else return alert("Is not a number");

    const aire = (Longueur*Longueur)*Math.PI;
    const perim = 2*Math.PI*Longueur;

    alert("Aire = " + aire + " et Perimetre = " + perim);
    }, true);
}

function exo3() {

    document.getElementById("Affiche")
    .addEventListener('click', test ,true);

    function test () {
        multiplie(a);
        multiplie(b);
        multiplie();
    }
        

}

function multiplie(x = 8) {
    return affiche(x*3); 
}

function affiche(result) {
    alert(result);
}


function exo4() {
    document.getElementById("Tab")
    .addEventListener('click', function() {
        
        let tab = new Array(-2, 1, 4);
        let i = 0;
        for(i = 0; i < 3; i++) {
            additione(tab[i]);
        }
    }, true);
}

function additione(x) {
    x+=2;
    return affiche(x);
}

function exo5() {
    document.getElementById("Boucle")
    .addEventListener('click', boucle, true);

    document.getElementById("Boucle")
    .addEventListener('click', boucle2, true);
}

function boucle() {
    let tab = new Array(3)
    for (let i = 1; i < tab.length + 1; i++) {
        tab[i-1] = i*i;
    }
    alert(tab.map(x => x));
}

function boucle2() {
    taille = prompt("Saisissez la taille du tableau :");
    taille = parseInt(taille, 10);
    tab = new Array(taille);
    for (let i = 1; i < tab.length + 1; i++) {
        tab[i-1] = i*i;
    }
    alert(tab.map(x => x));
}

function exo6() {
    document.getElementById("Tab2")
    .addEventListener('click', function() {
        let tab = new Array(-2, 1, 4);
        let FstElem = soustrait(tab[0]);
        let LstElem = soustrait(tab[tab.length - 1]);
        affiche(FstElem);
        affiche(LstElem);
    }, true);
}

function soustrait(x) {
    x -= 2;
    if (x >= 0) {
        return x;
    } else {
        return x = "Nombre négatif";
    }
}

function exo7() {
    document.getElementById("Jours")
    .addEventListener('click', function() {
        const date = new Date();
        const day = date.getDay();

        switch (day) {
            case 0:
                alert("Dimanche");
                break;
            case 1:
                alert("Lundi");
                break;
            case 2:
                alert("Mardi");
                break;
            case 3:
                alert("Mercredi");
                break;
            case 4:
                alert("Jeudi") 
                break;
            case 5:
                alert("Vendredi");
                break;
            case 6:
                alert("Samedi");
                break;
            default:
                alert("Error");
                break;
        }
    }, true);
}

function exo8() {
    var div = document.getElementById("colored")
    div.addEventListener("mouseover", function(event) {
        event.target.style.color = 'red';

    }, true);
    
    div.addEventListener("click", function(event) {
        event.target.style.color = "lime";
    },true);

    div.addEventListener("dblclick", function(event) {
        event.target.style.color = "navy";
    },true);
}

function exo9() {
    var p = document.getElementById("paragraph")
    p.addEventListener("click", function() {

        this.style.margin="0 auto";
        this.style.width="0px";
    }, true);

    p.addEventListener("dblclick", function() {

        this.style.margin="0px";
        this.style.width="500px";
    }, true);
}

function exo10() {
    var div = document.getElementById("innerhtml")
    div.addEventListener("mouseover", function() {

        this.innerHTML="Aie !";
    }, true);

    div.addEventListener("mouseout", function() {

        this.innerHTML="Passe sur moi !"
    }, true)
}

function exo11() {
    document.getElementById("Original")
    .addEventListener("click", modif_paragraphe, true)
    centrage_h1();
    
    function centrage_h1() {
        const h1 = document.querySelectorAll("h1");
        h1[0].setAttribute("align", "center")
    }
}

function modif_paragraphe() {
    this.innerHTML="Corrigé".italics();    
}

function exo12() {
    let page;
    
    document.getElementById("1")
    .addEventListener("click", function() {
        page = window.open("http://192.168.65.204/Thomas/Web/JavaScript/", "myWindow", "width=200, height=100");
        page.moveTo(50, 50);
    }, true);

    document.getElementById("2")
    .addEventListener("click", function() {
        page = window.open("http://192.168.65.204/Thomas/Web/JavaScript/", "myWindow", "width=200, height=100");
        page.moveBy(50, 50);
    }, true);

    document.getElementById("3")
    .addEventListener("click", function() {
        page = window.open("http://192.168.65.204/Thomas/Web/JavaScript/", "myWindow", "width=200, height=100");
        page.resizeBy(100, -100);
    }, true);
}

function exo13() {
    var test = window.navigator;
    document.getElementById("nav")
    .addEventListener("click", () => {
        for (let [key, value] of Object.entries(test)) {
  
            alert(`${key}: ${value}`);
        }
        //alert(window.navigator.appName + window.navigator.appVersion + window.navigator.appCodeName + window.navigator.userAgent)
    }, true)

    //A finir
}

function exo14() {
    init();
}

function init() {
    var Submit = document.getElementById("Submit");
    var Reset = document.getElementById("Reset");
    var Text = document.getElementById("Text");

    Submit.addEventListener("click", fctSubmit, true);
    Reset.addEventListener("click", reset, true);

    function fctSubmit() {
        alert(Text.value);
    }
    function reset() {
        alert("Resetting String");
        Text.value='';
    }
}

function exo15() {
    init2();
}

function init2() {
    var span = document.getElementById("span1");
    span.addEventListener("click", mongestionnaire, false);
}

function mongestionnaire() {
    this.style.background = "green";
}
