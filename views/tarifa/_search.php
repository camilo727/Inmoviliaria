<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\searchs\TarifaSearchs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tarifa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Tarifa') ?>

    <?= $form->field($model, 'fecha_inicio_vigencia') ?>

    <?= $form->field($model, 'fecha_fin_vigencia') ?>

    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'TipoTarifas') ?>

    <?php // echo $form->field($model, 'Id_Apartamento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
