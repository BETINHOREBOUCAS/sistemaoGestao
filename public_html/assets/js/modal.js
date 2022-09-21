var modalBlack = document.getElementsByClassName("modal-black")[0];
var modalContent = document.getElementsByClassName("modal-content")[0];
var buttonAdd = document.getElementsByClassName("button_add")[0];
var exit = document.getElementById("exit");

exit.addEventListener("click", function () {
    modalBlack.style.display = "none";
    modalContent.style.display = "none";
})

modalBlack.addEventListener("click", function () {
    modalBlack.style.display = "none";
    modalContent.style.display = "none";
})

buttonAdd.addEventListener("click", function () {
    modalBlack.style.display = "block";
    modalContent.style.display = "block";
})