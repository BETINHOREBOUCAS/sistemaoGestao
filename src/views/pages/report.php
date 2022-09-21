<?= $render("header", [
    "title" => "Relatórios",
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
    <div class="filter_report">
        <div class="type">
            <h4>Tipo do Relatório:</h4>
            <div>
                <div>
                    <input type="radio" name="" id=""><label for="">Contas a Pagar</label>
                </div>
                <div>
                    <input type="radio" name="" id=""><label for="">Contas a Receber</label>
                </div>
                <div>
                    <input type="radio" name="" id=""><label for="">Vendas</label>
                </div>
                <div>
                    <input type="radio" name="" id=""><label for="">Clientes</label>
                </div>
                <div>
                    <input type="radio" name="" id=""><label for="">Produtos</label>
                </div>
                <div>
                    <input type="radio" name="" id=""><label for="">Matéria Prima</label>
                </div>
            </div>
        </div>

        <div class="filter">
            <h4>Aplicar Filtros:</h4>
            <div class="style-campo">
                <label for="">Data Inicio:</label> <br>
                <input type="date" name="" id="">
            </div>
            <br>
            <div class="style-campo">
                <label for="">Data Fim:</label> <br>
                <input type="date" name="" id="">
            </div>
            <br>
            <div class="style-campo">
                <label for="">Ordenar por: </label> <br>
                <select name="" id="">
                    <option value=""></option>
                    <option value="">Nome</option>
                </select>
            </div>
            <br>
            <div>
                <input type="checkbox" name="" id=""><label for="">Todas</label>
            </div>
            <div>
                <input type="checkbox" name="" id=""><label for="">Vencidas</label>
            </div>
            <div>
                <input type="checkbox" name="" id=""><label for="">A Vencer</label>
            </div>
            <div>
                <input type="checkbox" name="" id=""><label for="">Pagas</label>
            </div>
            <!--Clientes-->
            <div>
                <input type="checkbox" name="" id=""><label for="">Top 10</label>
            </div>
            <div>
                <input type="checkbox" name="" id=""><label for="">Devedores</label>
            </div>
        </div>

        <div class="fields">
            <h4>Constar Campos:</h4>
            <div>
                <input type="checkbox" name="" id=""><label for="">Valor</label>
            </div>
            <div>
                <input type="checkbox" name="" id=""><label for="">data</label>
            </div>
        </div>
    </div>

    <div class="buttom-report">
        <div class="sub-product-buttom">
            <input type="submit" value="Pesquisar" class="myButton">
        </div>
    </div>

    <div>
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

<?php $render('footer'); ?>