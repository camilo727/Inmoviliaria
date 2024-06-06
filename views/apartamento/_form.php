<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Apartamento $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="apartamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Apartamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_TipoApartamento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
