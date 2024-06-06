<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tarifa $model */

$this->title = 'Update Tarifa: ' . $model->Id_Tarifa;
$this->params['breadcrumbs'][] = ['label' => 'Tarifas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Tarifa, 'url' => ['view', 'Id_Tarifa' => $model->Id_Tarifa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarifa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
