<?php $render("header", ["title" => "Realizar Pedido"]); ?>

<div class="container">
    <section>
        <div class="section">
            <div class="line-product">
                <div class="search">
                    <input type="text" name="" id="" placeholder="Pesquisar produto">
                </div>
                <div class="product">
                    <div id="down"><i class="fa-solid fa-chevron-down"></i></div>
                    <div class="img-product info">
                        <div>
                            <table>
                                <tr>
                                    <td><img src="<?= $base; ?>/img_produtos/g-verde.jpg"></td>
                                    <td><img src="<?= $base; ?>/img_produtos/g-vermelha.jpg"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?= $base; ?>/img_produtos/g-azul.jpg"></td>
                                    <td><img src="<?= $base; ?>/img_produtos/g-caramelo.jpg"></td>

                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="title-product info">Rede Maria Bonita nº 4</div>
                    <div class="price-product info">R$ 154,00</div>
                    <div class="inventory-product info">5 Unid.</div>
                </div>
                <div class="sub-product">
                    <div class="sub-img">
                        <img src="<?= $base; ?>/img_produtos/g-caramelo.jpg">
                    </div>
                    <div class="sub-info">
                        <div>Cor: Caramelo</div>
                        <div>Estoque: 10 unidades</div>
                    </div>
                    <div class="action-product">
                        <div><input type="number" name="" id=""></div>
                        <div title="Adicionar no Carrinho"><i class="fa-solid fa-cart-plus"></i></div>
                    </div>
                </div>
                <div class="sub-product">
                    <div class="sub-img">
                        <img src="<?= $base; ?>/img_produtos/g-verde.jpg">
                    </div>
                    <div class="sub-info">
                        <div>Cor: Verde</div>
                        <div>Estoque: 10 unidades</div>
                    </div>
                    <div class="action-product">
                        <div><input type="number" name="" id=""></div>
                        <div title="Adicionar no Carrinho"><i class="fa-solid fa-cart-plus"></i></div>
                    </div>
                </div>
                <div class="sub-product">
                    <div class="sub-img">
                        <img src="<?= $base; ?>/img_produtos/g-vermelha.jpg">
                    </div>
                    <div class="sub-info">
                        <div>Cor: Vermelha</div>
                        <div>Estoque: 10 unidades</div>
                    </div>
                    <div class="action-product">
                        <div><input type="number" name="" id=""></div>
                        <div title="Adicionar no Carrinho"><i class="fa-solid fa-cart-plus"></i></div>
                    </div>
                </div>
                <div class="sub-product">
                    <div class="sub-img">
                        <img src="<?= $base; ?>/img_produtos/g-azul.jpg">
                    </div>
                    <div class="sub-info">
                        <div>Cor: Azul</div>
                        <div>Estoque: 10 unidades</div>
                    </div>
                    <div class="action-product">
                        <div><input type="number" name="" id=""></div>
                        <div title="Adicionar no Carrinho"><i class="fa-solid fa-cart-plus"></i></div>
                    </div>
                </div>
                <!--<div class="sub-product sub-product-buttom">
                    <input type="submit" value="Adicionar ao Carrinho" class="myButton">
                </div>-->
            </div>

        </div>

    </section>
</div>

<?php $render('footer'); ?>