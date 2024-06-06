<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\searchs\ApartamentoSearchs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="apartamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Apartamento') ?>

    <?= $form->field($model, 'Apartamento') ?>

    <?= $form->field($model, 'Direccion') ?>

    <?= $form->field($model, 'Ciudad') ?>

    <?= $form->field($model, 'Id_TipoApartamento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
