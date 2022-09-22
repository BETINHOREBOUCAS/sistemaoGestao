async function loadPosts() {
    document.getElementById('posts').innerHTML = "Carregando...";

    /* 
    |------------------------------------------ 
    | async -> A função sera sincrona
    | await -> Espera promisse finalizar
    | Pegando HTML -> let html = await req.text();
    |------------------------------------------
    */
    let req = await fetch('https://jsonplaceholder.typicode.com/posts');
    let json = await req.json();
    montarBlog(json);

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