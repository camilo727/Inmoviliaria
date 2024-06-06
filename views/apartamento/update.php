<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Apartamento $model */

$this->title = 'Update Apartamento: ' . $model->Id_Apartamento;
$this->params['breadcrumbs'][] = ['label' => 'Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Apartamento, 'url' => ['view', 'Id_Apartamento' => $model->Id_Apartamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apartamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
