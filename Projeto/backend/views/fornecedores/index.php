<?php

use backend\models\Fornecedor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Fornecedor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fornecedores-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fornecedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'designacaoSocial',
            'email:email',
            'nif',
            'morada',
            //'capitalSocial',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Fornecedor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
