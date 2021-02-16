let secState = 0;
let minState = 0;
let hourState = 0;
let click = false;
let secInstance;
let minInstance;
let hrInstance;


function start() {
    
    const image = document.getElementById("Start");
    const hours = document.getElementById("needleHours");
    const minutes = document.getElementById("needleMinutes");
    const seconds = document.getElementById("needleSeconds");
    image.addEventListener("click", function() {
        
        click = !click;
        
        if(click == true) {
            
            secInstance = setInterval(() => {
                secState = secState + 0.15;
                seconds.style.transform = `rotate(${secState}deg)`;
                
            }, 25);
            minInstance = setInterval(() => {
                minState = minState + 6/60;
                minutes.style.transform = `rotate(${minState}deg)`;
            }, 1000);
            hrInstance = setInterval(() => {
                hourState = hourState + 0.5/60;
                hours.style.transform =  `rotate(${hourState}deg)`;
            }, 1000); 
        }else{
            hours.style.transform = `rotate(0deg)`;
            minutes.style.transform = `rotate(0deg)`;
            seconds.style.transform = `rotate(0deg)`;
            secState = 0;
            minState = 0;
            hourState = 0;
            clearInterval(secInstance);
            clearInterval(minInstance);
            clearInterval(hrInstance);
        }
    }
    , false);
    
}