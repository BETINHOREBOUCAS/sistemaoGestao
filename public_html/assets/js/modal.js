/*==============================================================================================*/
// Variaveis globais
/*==============================================================================================*/
var bodyModal = document.getElementsByClassName("modal-body")[0];
var modalBlack = document.getElementsByClassName("modal-black")[0];
var modalContent = document.getElementsByClassName("modal-content")[0];
var buttonModal = document.getElementsByClassName("add-content")[0];
var exit = document.getElementById("exit");
var loading = document.getElementsByClassName("img-modal")[0];
var title = document.querySelector(".modal-header div h2");
var modalDelete = document.querySelector(".modal-content-delete");
var modalBlackDelete = document.querySelector(".modal-black-delete");
var buttonNao = document.getElementById("nao");
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
// Abri o modal principal
function openModal() {
    // outerHTML transforma objeto em string
    bodyModal.innerHTML = loading.outerHTML;
    modalBlack.style.display = "block";
    modalContent.style.display = "block";
}

// Fecha o modal principal
function closedModal() {
    modalContent.classList.remove("modal-content");
    modalContent.classList.add("modal-content-exit");
    setTimeout(() => {
        modalContent.classList.add("modal-content");
        modalContent.classList.remove("modal-content-exit");
        modalBlack.style.display = "none";
        modalContent.style.display = "none";
    }, 200);
}

// Abrir modal de delete
function openModalDel() {
    modalBlackDelete.style.display = "block";
    modalDelete.style.display = "block";
}

// Fechar modal de delete
function closedModalDel() {
    modalDelete.classList.remove("modal-content-delete");
    modalDelete.classList.add("modal-content-exit-delete");
    setTimeout(() => {
        modalDelete.classList.add("modal-content-delete");
        modalDelete.classList.remove("modal-content-exit-delete");
        modalBlackDelete.style.display = "none";
        modalDelete.style.display = "none";
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
    title.innerHTML = buttonModal.getAttribute("title");
    openModal();
})

exit.addEventListener("click", function () {
    closedModal();
})

modalBlack.addEventListener("click", function () {
    closedModal();
})

modalBlackDelete.addEventListener("click", () => {
    closedModalDel();
});

buttonNao.addEventListener("click", () => {
    closedModalDel();
})
/*==============================================================================================*/
// FIM
/*==============================================================================================*/

/*==============================================================================================*/
// Ações dos clientes
/*==============================================================================================*/
function del() {
    title.innerHTML = this.title.outerHTML;
    openModalDel();
}

function edit(url, tit, idClient) {
    title.innerHTML = tit;
    request(url);
    openModal();
}
/*==============================================================================================*/
// FIM
/*==============================================================================================*/