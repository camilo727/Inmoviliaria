<?php

use app\models\Tarifa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\searchs\TarifaSearchs $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tarifas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarifa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tarifa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Tarifa',
            'fecha_inicio_vigencia',
            'fecha_fin_vigencia',
            'valor',
            'TipoTarifas',
            //'Id_Apartamento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tarifa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Tarifa' => $model->Id_Tarifa]);
                 }
            ],
        ],
    ]); ?>


</div>
