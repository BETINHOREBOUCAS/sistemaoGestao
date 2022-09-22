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
        // Quando tiver o resultado da requisição do url acima transforma ele em json
        .then(function(resultado) {
            // json() -> Retorna uma promise
            return resultado.json();
        })
        // Esse then() é referente a função json() que é uma promessa.
        .then(function(json) {
            document.getElementById('posts').innerHTML = json.length + " posts";
        })
        .catch(function() {
            console.log('Deu erro');
        });


}