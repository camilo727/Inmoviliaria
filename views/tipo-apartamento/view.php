<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TipoApartamento $model */

$this->title = $model->Id_TipoApartamento;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Apartamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tipo-apartamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_TipoApartamento' => $model->Id_TipoApartamento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_TipoApartamento' => $model->Id_TipoApartamento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_TipoApartamento',
            'TipoApartamento',
        ],
    ]) ?>

</div>
