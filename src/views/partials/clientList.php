
<table class="table-list">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Vendedor</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
    </thead>

    <?php foreach ($clients as $key => $value) : ?>
        <tbody>
            <tr>
                <td><?= $value['nome']; ?></td>
                <td><?= $value['vendedor']; ?></td>
                <td><?= $value['endereco']; ?></td>
                <td>
                    <div class="person-icons">
                        <a href="<?= $base; ?>/buy/historic/1">
                            <div title="Histórico de Compras"><i class="fa-solid fa-clock-rotate-left"></i></div>
                        </a>

                        <div title="Editar Cliente" class="edit" url="<?= $base; ?>/clientAdd"><i class="fa-solid fa-pen-to-square"></i></div>

                        <div title="Excluir Cliente" class="delete"><i class="fa-solid fa-trash-can"></i></div>
                    </div>
                </td>
            </tr>
        </tbody>
    <?php endforeach ?>
</table>