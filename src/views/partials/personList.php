<table class="table-list">
    
    <thead>
        <tr>
            <?php foreach ($infoPerson["personTitle"] as $key => $value) : ?>
                <th><?= $value; ?></th>
            <?php endforeach ?>
        </tr>
    </thead>

    <?php if ($infoPerson['pageTitle'] == "Cliente") : ?>
        <?php foreach ($infoPerson["person"] as $key => $value) : ?>
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

                            <div title=" <?=$infoPerson['pageTitle'];?>" class="edit" onclick="edit('<?= $base; ?>/clientAdd', 'Editar <?=$infoPerson['pageTitle'];?>', 2)"><i class="fa-solid fa-pen-to-square"></i></div>

                            <div title="Excluir <?=$infoPerson['pageTitle'];?>" class="delete" onclick="del()"><i class="fa-solid fa-trash-can"></i></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    <?php endif ?>

    <?php if ($infoPerson['pageTitle'] == "Colaborador") : ?>
        <?php foreach ($infoPerson["person"] as $key => $value) : ?>
            <tbody>
            <tr>
                    <td><?= $value['nome']; ?></td>
                    <td><?= $value['funcao']; ?></td>
                    <td><?= $value['endereco']; ?></td>
                    <td>
                        <div class="person-icons">
                            <a href="<?= $base; ?>/buy/historic/1">
                                <div title="Histórico de Compras"><i class="fa-solid fa-clock-rotate-left"></i></div>
                            </a>

                            <div title=" <?=$infoPerson['pageTitle'];?>" class="edit" onclick="edit('<?= $base; ?>/clientAdd', 'Editar <?=$infoPerson['pageTitle'];?>', 2)"><i class="fa-solid fa-pen-to-square"></i></div>

                            <div title="Excluir <?=$infoPerson['pageTitle'];?>" class="delete" onclick="del()"><i class="fa-solid fa-trash-can"></i></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    <?php endif ?>

</table>