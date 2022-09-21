<?= $render("header", [
    "title" => "Configurações",
    "inputModal" => [
        "inputModal" => [
            "nome proprietario",
            "nome vendedor",
            "celular",
            "celular vendedor",
            "endereco"
        ]
    ]
]); ?>

<div class="container">
    <div class="business">
        <form action="" method="post">
            <div class="data">
                <div>
                    <label for="">CNPJ ou CPF:</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Nome da Empresa:</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Nome completo:</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Data de nascimento:</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Celular:</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Endereço:</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Estado:</label><br>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Cidade:</label><br>
                    <input type="text" name="" id="">
                </div>
                <div class="buttom-report">
                    <div class="sub-product-buttom">
                        <input type="submit" value="Salvar" class="myButton">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $render('footer'); ?>