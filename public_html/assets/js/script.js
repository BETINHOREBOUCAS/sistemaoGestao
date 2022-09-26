//Manipulação da notificação no header
var notification = document.querySelector('#notification');
var barNotification = document.querySelector('.bar-notification');

notification.addEventListener("click", function(){
    let propriedade = getComputedStyle(barNotification).getPropertyValue('display');
    if (propriedade == "none") {
        barNotification.style.display = "block";
    } else {
        barNotification.style.display = "none";        
    }
});
//Fim da manipulação da notificação no header