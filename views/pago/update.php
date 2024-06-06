<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pago $model */

$this->title = 'Update Pago: ' . $model->Id_Pago;
$this->params['breadcrumbs'][] = ['label' => 'Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pago, 'url' => ['view', 'Id_Pago' => $model->Id_Pago]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pago-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
