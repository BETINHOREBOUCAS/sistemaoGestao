<?php $render("header", ["title" => "Página Inicial"]); ?>

<div class="container">

    <div class="dash">
        <div class="dash-control" id="client">
            <div class="dash-icons">
                <div><i class="fa-solid fa-users"></i></div>
                <div>500</div>
            </div>
            <div class="dash-text">Clientes</div>
        </div>

        <div class="dash-control" id="inventory">
            <div class="dash-icons">
                <div><i class="fa-solid fa-boxes-stacked"></i></div>
                <div>3</div>
            </div>
            <div class="dash-text">Estoque Baixo</div>
        </div>

        <div class="dash-control" id="cart">
            <div class="dash-icons">
                <div><i class="fa-solid fa-cart-shopping"></i></div>
                <div>10</div>
            </div>
            <div class="dash-text">Carrinho</div>
        </div>

        <div class="dash-control" id="company">
            <div class="dash-icons">
                <div><i class="fa-solid fa-building"></i></div>
                <div>5</div>
            </div>
            <div class="dash-text">Fornecedores</div>
        </div>

        <div class="dash-control" id="order">
            <div class="dash-icons">
                <div><i class="fa-solid fa-handshake"></i></div>
                <div>5</div>
            </div>
            <div class="dash-text">Pedidos</div>
        </div>

    </div>
    <section>
        <div class="section">
            <div class="sale">
                <div class="block">
                    <div class="dialog">Contas a Pagar</div>
                    <div class="itens pay">
                        <div><i class="fa-solid fa-square"></i></div>
                        <div> R$ 125,00 / Agosto</div>
                    </div>
                    <div class="itens pay">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 1.000,00 / Outubro</div>
                    </div>
                    <div class="itens pay">
                        <i class="fa-solid fa-square"></i> R$ 1.589,00 / Dezembro
                    </div>
                    <div class="itens pay">
                        <i class="fa-solid fa-square"></i> R$ 54,00 / Janeiro
                    </div>
                </div>
                <div class="block">
                    <div class="dialog">Contas a Receber</div>
                    <div class="itens receive">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 1.000,00 / Março</div>
                    </div>
                    <div class="itens receive">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 300,00 / Fevereiro</div>
                    </div>
                    <div class="itens receive">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 300,00 / Outubro</div>
                    </div>
                    <div class="itens receive">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 300,00 / Novembro</div>
                    </div>
                </div>
                <div class="block">
                    <div class="dialog">Lucros</div>
                    <div class="itens money">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 1.000,00 / Março</div>
                    </div>
                    <div class="itens money">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 300,00 / Fevereiro</div>
                    </div>
                    <div class="itens money">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 300,00 / Outubro</div>
                    </div>
                    <div class="itens money">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>R$ 300,00 / Novembro</div>
                    </div>
                </div>
            </div>
            <div class="sale">
                <div class="block">
                    <div class="dialog">Top 5 Clentes</div>
                    <div class="itens top-5">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>Maria</div>
                    </div>
                    <div class="itens top-5">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>Creuza</div>
                    </div>
                </div>
                <div class="block">
                    <div class="dialog">Mais Vendidos</div>
                    <div class="itens top-5">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>Rede Jeans Média</div>
                    </div>
                    <div class="itens top-5">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>Gigante</div>
                    </div>
                    <div class="itens top-5">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>Tijubana</div>
                    </div>
                </div>
                <div class="block">
                    <div class="dialog">Pedidos à Fornecedores</div>
                    <div class="itens top-5">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>Fio Caramelo</div>
                    </div>
                    <div class="itens top-5">
                        <div> <i class="fa-solid fa-square"></i></div>
                        <div>Fio Preto</div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

<?php $render('footer'); ?>