/*==============================================================================================*/
                                    // Variaveis globais
/*==============================================================================================*/
var bodyModal = document.getElementsByClassName("modal-body")[0];
var modalBlack = document.getElementsByClassName("modal-black")[0];
var modalContent = document.getElementsByClassName("modal-content")[0];
var buttonModal = document.getElementsByClassName("add-content")[0];
var exit = document.getElementById("exit");
/*==============================================================================================*/
                                    // FIM
/*==============================================================================================*/

/*==============================================================================================*/
                                // Requisões POST E GET
/*==============================================================================================*/
async function request(url) {
    let req = await fetch(url);
    let result = await req.text();
    bodyModal.innerHTML = result
}
/*==============================================================================================*/
                                    // FIM
/*==============================================================================================*/


/*==============================================================================================*/
                                // Manipulação do modal
/*==============================================================================================*/
// Abri o modal
function openModal() {
    modalBlack.style.display = "block";
    modalContent.style.display = "block";
}

// Fecha o modal
function closedModal() {
    modalContent.classList.remove("modal-content");
    modalContent.classList.add("modal-content-exit");
    setTimeout( () => {
        modalContent.classList.add("modal-content");
        modalContent.classList.remove("modal-content-exit");
        modalBlack.style.display = "none";
        modalContent.style.display = "none";
    }, 200);
}
/*==============================================================================================*/
                                    // FIM
/*==============================================================================================*/

/*==============================================================================================*/
                                // Ações de Click
/*==============================================================================================*/
buttonModal.addEventListener("click", () => {
    request(buttonModal.getAttribute("url"));
    openModal();    
})

exit.addEventListener("click", function () {
    closedModal();
})

modalBlack.addEventListener("click", function () {
    closedModal();
})
/*==============================================================================================*/
                                    // FIM
/*==============================================================================================*/

/*==============================================================================================*/
            // Ao clicar nao opções da lista na página de clientes irá abrir o modal
/*==============================================================================================*/
var historic = document.getElementsByClassName("historic");
var edit = document.getElementsByClassName("edit");
var del = document.getElementsByClassName("delete");

for (let index = 0; index < historic.length; index++) {
    historic[index].addEventListener("click", () => {
        openModal();
    });
};

for (let index = 0; index < edit.length; index++) {
    edit[index].addEventListener("click", () => {
        openModal();
    });
};

for (let index = 0; index < del.length; index++) {
    del[index].addEventListener("click", () => {
        openModal();
    });
};
/*==============================================================================================*/
                                    // FIM
/*==============================================================================================*/