<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TipoApartamento $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tipo-apartamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TipoApartamento')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
