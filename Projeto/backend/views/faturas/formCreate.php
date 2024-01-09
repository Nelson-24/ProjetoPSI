<?php

use backend\models\Fatura;
use backend\models\Linhafatura;
use common\models\User;
use hail812\adminlte3\yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var backend\models\Fatura $model */
/** @var backend\models\LinhaFatura $linhafatura */
/** @var common\models\User $cliente */
/** @var common\models\Profile $profile */
/** @var yii\data\ActiveDataProvider $dataProvider */





?>



<div class="faturas-form">

    <?php $form = ActiveForm::begin();
    ?>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="invoice p-3 mb-3">

                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> AdminLTE, Inc.
                                        <small class="float-right">Date: <?= date('d/m/Y') ?></small>
                                        <?= $form->field($model, 'data')->hiddenInput(['value' => date('Y-m-d')])->label(false) ?>

                                    </h4>
                                </div>

                            </div>

                            <div class="row invoice-info">


                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <?php
                                        if ($model->user !== null && $model->user->profile !== null) {

                                            echo '<strong>Nome:</strong> ' . $model->user->profile->nome . '<br>';
                                            echo '<strong>Morada:</strong> ' . $model->user->profile->morada . '<br>';
                                            echo '<strong>Contacto:</strong> ' . $model->user->profile->contacto . '<br>';
                                            echo '<strong>Email:</strong> ' . $model->user->email . '<br>';

                                        } else {
                                            echo 'Perfil do utilizador não encontrado.';
                                        }
                                        ?>
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <?php
                                        echo '<strong>Nr Fatura:</strong> ' . $model->id . '<br>';
                                        echo '<strong>Estado:</strong> ' . $model->estado . '<br>';

                                        ?>
                                    </address>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">

                                        <tr>

                                            <?= Html::a('Selecionar Artigo', ['linha-fatura/selecionar-artigos'], ['class' => 'btn btn-primary']) ?>

                                        </tr>
                                    </table>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="../../dist/img/credit/visa.png" alt="Visa">
                                    <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                    <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                </div>

                                <div class="col-6">
                                    <p class="lead">Amount Due 2/22/2014</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>

                                                <th><?php echo '<strong>Sub Total:</strong> ' . $model->valorTotal. '<br>'; ?> </th>
                                            </tr>
                                            <tr>
                                                <th>Tax (23%)</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Shipping:</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>


                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

                                    </button>
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

</div>
<?php ActiveForm::end(); ?>