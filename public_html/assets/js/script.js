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

display.addEventListener("click", function(){
    this.style.display = "none";
    barNotification.style.display = "none";
});

// Controlando modal

var modal = document.querySelector('#modal');
var modalConteudo = document.querySelector('#modal-content');

modal.addEventListener('click', function(){
    this.style.display = 'none';
    modalConteudo.style.display = 'none';
})