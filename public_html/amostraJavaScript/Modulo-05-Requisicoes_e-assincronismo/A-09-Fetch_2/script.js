function loadPosts() {
    document.getElementById('posts').innerHTML = "Carregando...";
    /* 
    |------------------------------------------ 
    | fetch -> Retorna uma promessa
    |------------------------------------------
    | Parametros:
    | 1º URL 
    | 2º Configurações da requisição. OBS: Opcional
    */
    fetch('https://jsonplaceholder.typicode.com/posts')
        // Quando tiver o resultado transforma ele em json
        .then(function(resultado) {
            // json() -> Retorna uma promise
            return resultado.json();
        })
        .then(function(json) {
            montarBlog(json);
        })
        .catch(function() {
            console.log('Deu erro');
        });


}

function montarBlog(lista) {
    let html = '';

    for (let i in lista) {
        html += '<h3>' + lista[i].title + '</h3>';
        html += lista[i].body + '<br>';
        html += '<hr>';
    }

    document.getElementById('posts').innerHTML = html;
}