<?php

use app\models\TipoApartamento;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\searchs\TipoApartamentoSearchs $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tipo Apartamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-apartamento-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipo Apartamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_TipoApartamento',
            'TipoApartamento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TipoApartamento $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_TipoApartamento' => $model->Id_TipoApartamento]);
                 }
            ],
        ],
    ]); ?>


</div>
