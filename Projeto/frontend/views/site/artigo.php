<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Artigo';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            display: flex;
            justify-content: space-around;
            flex-direction: row; /* Certifique-se de que os elementos são dispostos em linha */
        }
        .article-container {
            max-width: 300px;
            margin: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            box-sizing: border-box;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        h2, p, span {
            margin-bottom: 10px;
        }
        .price {
            color: green;
            font-weight: bold;
            font-size: 1.2em;
        }
        .add-to-cart-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1em;
            cursor: pointer;
        }
        .detalhes-btn {
            background-color: #FFA500;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1em;
            cursor: pointer;
        }
    </style>
<body>

<div class="article-container">
    <img src=images/materiais/cimento.jpg alt="Imagem do Artigo 1">
    <h2>Cimento</h2>
    <p>Saco de Cimento de 25 Kg</p>
    <p class="price">Preço: 25€</p>
    <p>Disponibilidade: Em estoque</p>
    <button class="add-to-cart-btn" onclick="adicionarAoCarrinho()">Adicionar ao Carrinho</button>
    <button class="detalhes-btn" onclick="adicionarAoCarrinho()">Detalhes</button>
</div>

<div class="article-container">
    <img src="images/materiais/tijolo-04.jpg" alt="Imagem do Artigo 2">
    <h2>Tijolo</h2>
    <p>Conjunto de 200 Tijolos</p>
    <p class="price">Preço: 10€</p>
    <p>Disponibilidade: Em estoque</p>
    <button class="add-to-cart-btn" onclick="adicionarAoCarrinho()">Adicionar ao Carrinho</button>
    <button class="detalhes-btn" onclick="adicionarAoCarrinho()">Detalhes</button>
</div>

<script>
    function adicionarAoCarrinho() {
        alert("Artigo adicionado ao carrinho!");
    }
</script>

</body>
</html>