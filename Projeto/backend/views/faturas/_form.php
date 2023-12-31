<?php

use backend\models\Fatura;
use common\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var backend\models\Fatura $model */
/** @var backend\models\LinhaFatura $linhafatura */
/** @var common\models\User $cliente */
/** @var common\models\Profile $profile */





?>



<div class="faturas-form">

    <?php $form = ActiveForm::begin();
    ?>
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Invoice</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
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
                                    From
                                    <address>
                                        <strong>Admin, Inc.</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        Phone: (804) 123-5432<br>
                                        Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f060109002f0e03020e1c0e0a0a0b1c1b1a0b0600410c0002">[email&#160;protected]</a>
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    To
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

                                        ?>
                                    </address>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Product</th>
                                            <th>Serial #</th>
                                            <th>Description</th>
                                            <th>Subtotal</th>
                                        </tr>

                                            <tr>
                                                <th>ID da Linha de Fatura</th>
                                                <th>Outros Detalhes</th>
                                            </tr>
                                          



                                        <tbody>

                                        <tr>

                                            <?= Html::a('Selecionar Artigo', ['linha-fatura/selecionar-artigos'], ['class' => 'btn btn-primary']) ?>

                                        </tr>
                                        <?php ActiveForm::end(); ?>
                                        </tbody>
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
                                                <th style="width:50%">Subtotal:</th>
                                                <td></td>
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

</div>
