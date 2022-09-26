var display = document.querySelector('#displayOpacity');
var notification = document.querySelector('#notification');
var barNotification = document.querySelector('.bar-notification');

notification.addEventListener("click", function(){
    let propriedade = getComputedStyle(barNotification).getPropertyValue('display');
    if (propriedade == "none") {
        barNotification.style.display = "block";
        display.style.display = "block";
    } else {
        barNotification.style.display = "none";
        display.style.display = "none";
    }
});