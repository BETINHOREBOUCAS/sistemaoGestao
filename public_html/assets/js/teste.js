function ajaxTeste() {
    fetch('http://localhost/sistemaoGestao/public_html/client')
  .then(response => response.text())
  .then(json => console.log(json))
}


async function ajax() {

    var formData = new FormData();
    formData.append('motivo', "teste");

    let req = await fetch('http://localhost/sistemaoGestao/public_html/collaborator', {
        method: 'POST',
        body: JSON.stringify({
            title: 'Titulo de teste',
            body: 'Corpo de teste',
            userId: 4
        }),
        headers: {
            'content-Type': 'application/json'
        }
    });
    let json = await req.json();

    console.log(json);
}