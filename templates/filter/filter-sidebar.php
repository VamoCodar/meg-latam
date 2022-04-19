<?php
/**
 * 
 * This file is the template filter of archive-product.
 * 
 * @package Lemi
 * @author Nova Data
 * 
 */
?>
<div class="filtro--produtos">
    <div class="container--btn--filtrar">
        <button class="btn--fechar--filtro" data-filtro="close">
            <ion-icon name="close-outline"></ion-icon>Fechar Filtro
        </button>
    </div>
    <div class="filtro--titulo">
        <h3 class="titulo--categoria">Equipamentos</h3>
        <span class="quantidade--produtos">1000 produtos</span>
    </div>
    <div class="filtro--categorias">
        <div class="filtro--item" id="marcas">
            <h3 class="titulo--categoria">Marcas</h3>
            <ul>
                <li><a href="#">Marca one</a></li>
                <li> <a href="#">Marca two</a></li>
                <li> <a href="#">Marca three</a></li>
            </ul>
        </div>
        <div class="filtro--item" id="categoria">
            <h3 class="titulo--categoria">Categoria</h3>
            <ul>
                <li><a href="#">Categoria one</a></li>
                <li> <a href="#">Categoria two</a></li>
                <li> <a href="#">Categoria three</a></li>
            </ul>
        </div>
        <div class="filtro--item" id="cor">
            <h3 class="titulo--categoria">Cor</h3>
            <ul class="cores">
                <li id="cor--preto"><a href="#">Preto</a></li>
                <li id="cor--cinza"> <a href="#">Cinza</a></li>
                <li id="cor--verde"> <a href="#">Verde</a></li>
                <li id="cor--vermelho"><a href="#">Vermelho</a></li>
            </ul>
        </div>
        <div class="filtro--item" id="preco">
            <h3 class="titulo--categoria">Preço</h3>
            <ul>
                <li><a href="#">Até R$100</a></li>
                <li> <a href="#">R$100 a R$300</a></li>
                <li> <a href="#">Mais de R$300</a></li>
            </ul>
        </div>
        <div class="filtro--item" id="pagamento">
            <h3 class="titulo--categoria">Pagamento</h3>
            <ul>
                <li><a href="#">Sem juros</a></li>
            </ul>
        </div>
    </div>
</div>