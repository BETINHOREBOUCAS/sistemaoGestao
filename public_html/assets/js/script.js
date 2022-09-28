//Manipulação da notificação no header
var notification = document.querySelector('#notification');
var barNotification = document.querySelector('.bar-notification');
var searchButton = document.getElementById("search-button");

notification.addEventListener("click", function(){
    let propriedade = getComputedStyle(barNotification).getPropertyValue('display');
    if (propriedade == "none") {
        barNotification.style.display = "block";
    } else {
        barNotification.style.display = "none";        
    }
});
//Fim da manipulação da notificação no header

/*==============================================================================================*/
                                // Requisões POST E GET
/*==============================================================================================*/
async function requestBody(url, loading) {
    let req = await fetch(url);
    let result = await req.text();
    loading.innerHTML = result;
}
/*==============================================================================================*/
                                    // FIM
/*==============================================================================================*/

/*==============================================================================================*/
                                // Buscador de clientes
/*==============================================================================================*/
searchButton.addEventListener("click", () => {
    let input = document.querySelector(".search input");
    let url = input.getAttribute("url"); 
    let loading = document.querySelector(".table-list");
    requestBody(url, loading);
});
/*==============================================================================================*/
                                    // FIM
/*==============================================================================================*/