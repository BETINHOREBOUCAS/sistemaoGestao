<?php $render("header", ["title" => "Clientes"]); ?>

<div class="container">

    <div>
        <div class="person-list">

            <?= $render("search", ["title" => "Pesquisar Cliente"]); ?>

            <?= $render("buttonAdd", ["title" => "Cadastrar Cliente", "url" => "clientAdd"]); ?>

            <table class="table-list">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Vendedor</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Paulo</td>
                        <td>Raimundo</td>
                        <td>Mercado Central</td>
                        <td>
                            <div class="person-icons">
                                <div title="Histórico de Compras" class="historic"><i class="fa-solid fa-clock-rotate-left"></i></div>
                                <!--<div><i class="fa-solid fa-circle-plus"></i></div>-->
                                <div title="Editar Cliente" class="edit"><i class="fa-solid fa-pen-to-square"></i></div>
                                <div title="Excluir Cliente" class="delete"><i class="fa-solid fa-trash-can"></i></div>
                            </div>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>Pedro</td>
                        <td>-</td>
                        <td>Mercado Central</td>
                        <td>
                            <div class="person-icons">
                                <div title="Histórico de Compras" class="historic"><i class="fa-solid fa-clock-rotate-left"></i></div>
                                <!--<div><i class="fa-solid fa-circle-plus"></i></div>-->
                                <div title="Editar Cliente" class="edit"><i class="fa-solid fa-pen-to-square"></i></div>
                                <div title="Excluir Cliente" class="delete"><i class="fa-solid fa-trash-can"></i></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?=$render("modal");?>

<?=$render("modalDelete");?>

<?= $render("footer"); ?>