<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TipoApartamento $model */

$this->title = 'Update Tipo Apartamento: ' . $model->Id_TipoApartamento;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_TipoApartamento, 'url' => ['view', 'Id_TipoApartamento' => $model->Id_TipoApartamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-apartamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
