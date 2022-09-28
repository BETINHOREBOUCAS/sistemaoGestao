<?php $render("header", ["title" => "Clientes"]); ?>

<div class="container">

    <div>
        <div class="person-list">

            <?= $render("search", ["title" => "Pesquisar Cliente", "url" => "search/10"]); ?>

            <?= $render("buttonAdd", ["title" => "Cadastrar Cliente", "url" => "clientAdd"]); ?>

            <?= $render("clientList", [
                "clients" => [
                    [
                        "id" => 1,
                        "nome" => "Vanessa",
                        "vendedor" => "-",
                        "endereco" => "São José"
                    ],
                    [
                        "id" => 2,
                        "nome" => "José",
                        "vendedor" => "Maria",
                        "endereco" => "Giqui"
                    ]
                ]
            ]); ?>
        </div>
    </div>

</div>

<?= $render("modal"); ?>

<?= $render("modalDelete"); ?>

<?= $render("footer"); ?>