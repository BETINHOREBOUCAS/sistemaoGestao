<?php $render("header", ["title" => "Colaboradores"]); ?>

<div class="container">

    <div>
        <div class="person-list">

            <?= $render("search", ["title" => "Pesquisar Colaborador", "url" => "collaborator/search/10"]); ?>

            <?= $render("buttonAdd", ["title" => "Cadastrar Colaborador", "url" => "clientAdd"]); ?>

            <?= $render("personList", ["infoPerson" => $infoPerson]); ?>
        </div>
    </div>

</div>

<?= $render("modal"); ?>

<?= $render("footer"); ?>