function mostrar() {
    let imagem = document.getElementById('arquivo').files[0];

    // Cria uma tag img
    let img = document.createElement('img');
    img.src = URL.createObjectURL(imagem);
    img.width = 200;

    document.getElementById('area').appendChild(img);
}