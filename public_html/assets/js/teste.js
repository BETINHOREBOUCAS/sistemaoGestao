/*Pegando formulario*/
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