<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TipoApartamento $model */

$this->title = 'Create Tipo Apartamento';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-apartamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
