<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pago $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pago-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TipPago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Monto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_Reserva')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
