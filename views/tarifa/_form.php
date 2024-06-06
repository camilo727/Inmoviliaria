<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tarifa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tarifa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_inicio_vigencia')->textInput() ?>

    <?= $form->field($model, 'fecha_fin_vigencia')->textInput() ?>

    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TipoTarifas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_Apartamento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
