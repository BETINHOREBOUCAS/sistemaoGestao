function pegarTemperatura() {
    return new Promise(function(resolve, reject) {
        console.log("Pegando temperatura");

        setTimeout(function() {
            resolve('40 na sombra');
        }, 2000);
    })
}

// Usando a PROMISE
let temp = pegarTemperatura();
// Quando tiver o resultado executa o then
temp.then(function(resultado) {
    console.log(resultado);
});

// Quando houver algum problema executa catch
temp.catch(function(error) {
    console.log('Deu erro');
});