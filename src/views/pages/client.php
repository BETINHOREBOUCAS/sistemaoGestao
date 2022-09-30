<?php $render("header", ["title" => "Clientes"]); ?>

<div class="container">

    <div>
        <div class="person-list">

            <?= $render("search", ["title" => "Pesquisar Cliente", "url" => "client/search/10"]); ?>

            <?= $render("buttonAdd", ["title" => "Cadastrar Cliente", "url" => "clientAdd"]); ?>

            <?= $render("personList", ["infoPerson" => $infoPerson]); ?>
        </div>
    </div>

</div>

<?= $render("modal"); ?>

<?= $render("modalDelete"); ?>

<?= $render("footer"); ?>