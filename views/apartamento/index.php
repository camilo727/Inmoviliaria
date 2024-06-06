<?php

use app\models\Apartamento;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\searchs\ApartamentoSearchs $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Apartamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartamento-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Apartamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Apartamento',
            'Apartamento',
            'Direccion',
            'Ciudad',
            'Id_TipoApartamento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Apartamento $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Apartamento' => $model->Id_Apartamento]);
                 }
            ],
        ],
    ]); ?>


</div>
