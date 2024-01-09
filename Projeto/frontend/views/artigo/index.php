<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Artigo';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/artigo-index.css">
</head>

<body>
<?php
if (!empty($artigos)) : ?>
    <div class="artigos-container">
        <?php foreach ($artigos as $index => $artigo) : ?>
            <div class="artigo-item<?= ($index + 1) % 4 === 0 ? ' last-in-row' : '' ?>">
                <div class="artigo-container">

                    <?php
                    $imagemSrc = 'http://localhost/ProjetoPSI_/frontend/web/images/materiais/' . $artigo->imagem;
                    ?>
                    <img src="<?= $imagemSrc ?>" alt="Imagem do Artigo" width="200" height="150">


                    <h2><?= Html::encode($artigo->descricao) ?></h2>
                    <p>Preço: <?= Html::encode($artigo->preco) ?> €</p>


                    <button class="add-carrinho" onclick="adicionarAoCarrinho()">Adicionar ao Carrinho</button>

                    <!-- Botão de detalhes -->
                    <?= Html::a('Detalhes', ['view', 'id' => $artigo->id], ['class' => 'btn btn-primary']) ?>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p>Não tens artigos.</p>
<?php endif; ?>

<script>
    function adicionarAoCarrinho() {
        alert("Artigo adicionado ao carrinho!");
    }
</script>

</body>
</html>