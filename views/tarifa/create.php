<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tarifa $model */

$this->title = 'Create Tarifa';
$this->params['breadcrumbs'][] = ['label' => 'Tarifas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarifa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
