/*
//Pegando formulario
var form = document.getElementById("formulario");

async function ajax() {

    //mandando todo o formulario criado
    let data = new FormData(form);  
    
    let req = await fetch('http://localhost/sistemaoGestao/public_html/collaborator', {
        method: 'POST',
        body: data
        
    });

    // Transforma em text a requisição
    await req.text();
    
}
*/


/*
// Código estava no arquivo script
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
*/
