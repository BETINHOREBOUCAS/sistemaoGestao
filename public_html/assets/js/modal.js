var modalBlack = document.getElementsByClassName("modal-black")[0];
var modalContent = document.getElementsByClassName("modal-content")[0];
var buttonAddAjax = document.getElementsByClassName("add-content")[0];
var exit = document.getElementById("exit");

exit.addEventListener("click", function () {
    modalContent.classList.remove("modal-content");
    modalContent.classList.add("modal-content-exit");
    setTimeout( () => {
        modalContent.classList.add("modal-content");
        modalContent.classList.remove("modal-content-exit");
        modalBlack.style.display = "none";
        modalContent.style.display = "none";
    }, 200);
})

modalBlack.addEventListener("click", function () {
    modalContent.classList.remove("modal-content");
    modalContent.classList.add("modal-content-exit");
    setTimeout( () => {
        modalContent.classList.add("modal-content");
        modalContent.classList.remove("modal-content-exit");
        modalBlack.style.display = "none";
        modalContent.style.display = "none";
    }, 200);

})

buttonAddAjax.addEventListener("click", () => {
    modalBlack.style.display = "block";
    modalContent.style.display = "block";
})