function ajaxTeste() {
    fetch('http://localhost/sistemaoGestao/public_html/client')
  .then(response => response.text())
  .then(json => console.log(json))
}

/*Pegando formulario*/
var form = document.getElementById("formulario");

async function ajax() {

    /* Mandando formulario via post manipulando cada informação
    let data = new FormData();
    
    //Adiciona na variael
    data.append('title', 'bla bla bla');
    
    
    let req = await fetch('http://localhost/sistemaoGestao/public_html/collaborator', {
        method: 'POST',
        body: data
        
    });

    let json = await req.text();
    */

    /* mandando todo o formulario criado
    let data = new FormData(form);
    
    
    
    let req = await fetch('http://localhost/sistemaoGestao/public_html/collaborator', {
        method: 'POST',
        body: data
        
    });

    let json = await req.text();
    */
}