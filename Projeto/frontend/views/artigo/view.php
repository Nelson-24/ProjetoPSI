<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Artigos $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="artigos-view">



   <!-- <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>-->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'referencia',
            'descricao',
            'preco',
            'stock',
            'categoria_id',
            [
                'attribute' => 'imagem',
                'format' => 'html', // Define o formato como HTML
                'value' => function ($model) {
                    // Gera a tag HTML da imagem
                    $imagemSrc = "/projeto/frontend/web/images/materiais/{$model->imagem}";
                    return Html::img($imagemSrc, ['alt' => 'Imagem do Artigo']);
                },
            ],
        ],
    ]) ?>
    <!-- Botão de Adicionar ao Carrinho -->
    <?= Html::a('Adicionar ao Carrinho', ['carrinho/adicionar', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

    <!-- Botão para Voltar à Página Anterior -->
    <?= Html::a('Voltar', Yii::$app->request->referrer, ['class' => 'btn btn-primary']) ?>
</div>
