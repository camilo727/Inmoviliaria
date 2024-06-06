<?php

use app\models\Pago;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\searchs\PagoSearchs $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pagos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pago', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Pago',
            'TipPago',
            'Monto',
            'Id_Reserva',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pago $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Pago' => $model->Id_Pago]);
                 }
            ],
        ],
    ]); ?>


</div>
