<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */

$this->title = 'Update Cliente: ' . $model->Id_Cliente;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Cliente, 'url' => ['view', 'Id_Cliente' => $model->Id_Cliente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
