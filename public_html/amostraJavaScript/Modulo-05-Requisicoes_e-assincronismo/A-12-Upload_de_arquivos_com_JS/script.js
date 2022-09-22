async function enviar() {
    let arquivo = document.getElementById('arquivo').files[0];

    let body = new FormData();
    body.append('title', 'bla bla bla');
    body.append('arquivo', arquivo);
    
    let req = await fetch('https://www.meusite.com.br/upload', {
        method: 'POST',
        body: body,
        // Para envio de arquivos precisa usar o header
        headers: {
            'content-type': 'multipart/form-data'
        }
    });
}