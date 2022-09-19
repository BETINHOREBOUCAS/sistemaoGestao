<?= $render("header", ["title" => "Cadastrar Produto"]); ?>

<div class="container">
    <div class="form-product">
        <div>
            <label for="nome">Nome do Produto:</label><br>
            <input type="text" name="nome" id="nome">
        </div>
        <br>
        <div>
            <label for="desc">Especificação:</label><br>
            <textarea name="desc" id="desc" cols="120%" rows="10"></textarea>
        </div>
        <br>
        <div>
            <label for="img">Imagem Principal do Produto:</label>
            <input type="file" name="img" id="img"> <br>
            <label for="img">Outras Imagens:</label>
            <input type="file" name="img" id="img">
        </div>
        <div title="Adicionar Variação" class="buttom-var">
            <i class="fa-solid fa-square-plus"></i> <label for="addVar">Adicinar Variação</label>
        </div>
        <div>
            <label for="var">Variação:</label><br>
            <input type="text" name="nVar" id="nVar" placeholder="Ex. Cor, Tamanho, ..."><br>
            <label for="valor">Valor:</label><br>
            <input type="text" name="rVar" id="rVAr" placeholder="Ex. Azul">
            <label for="img">Imagem do Produto:</label>
            <input type="file" name="img" id="img">
        </div>

        <div class="sub-product-buttom">
            <input type="submit" value="Cadastrar Produto" class="myButton">
        </div>
    </div>
</div>

<?= $render("footer"); ?>