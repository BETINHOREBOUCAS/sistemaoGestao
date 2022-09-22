<?= $render("modal", [
    "titleModal" => "Cadastrar Cliente",
    "inputModal" => [
        "Nome do Proprietário:" => "proprietario",
        "Nome do Vendedor:" => "vendedor",
        "Celular:" => "celular",
        "Celular do Vendedor:" => "celVendedor",
        "Endereço:" => "endereco",
        "Estado:" => "estado",
        "Cidade:" => "cidade"
    ]
]); ?>

<div class="modal-form">
    <?php foreach ($inputModal as $key => $value) : ?>
        <div><label for="<?= $value; ?>"><?= $key; ?></label><br>
            <input type="text" name="<?= $value; ?>" id="<?= $value; ?>"> <br>
        </div>
    <?php endforeach ?>
</div>