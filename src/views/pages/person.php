<?= $render("header", ["title" => "Colaboradores"]); ?>

<div class="container">

    <div>
        <div class="person-list">

            <?= $render("search"); ?>
            <?= $render("buttonAdd"); ?>
            
            <table class="table-list">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Paulo</td>
                        <td>Impunhador</td>
                        <td>Lagoa dos Porcos</td>
                        <td>
                            <div class="person-icons">
                                <div><i class="fa-solid fa-clock-rotate-left"></i></div>
                                <div><i class="fa-solid fa-circle-plus"></i></div>
                                <div><i class="fa-solid fa-pen-to-square"></i></div>
                                <div><i class="fa-solid fa-trash-can"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Paulo</td>
                        <td>Impunhador</td>
                        <td>Lagoa dos Porcos</td>
                        <td>
                            <div class="person-icons">
                                <div><i class="fa-solid fa-clock-rotate-left"></i></div>
                                <div><i class="fa-solid fa-circle-plus"></i></div>
                                <div><i class="fa-solid fa-pen-to-square"></i></div>
                                <div><i class="fa-solid fa-trash-can"></i></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $render("footer"); ?>