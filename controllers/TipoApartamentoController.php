<?php

namespace app\controllers;

use app\models\TipoApartamento;
use app\models\searchs\TipoApartamentoSearchs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TipoApartamentoController implements the CRUD actions for TipoApartamento model.
 */
class TipoApartamentoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TipoApartamento models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TipoApartamentoSearchs();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TipoApartamento model.
     * @param int $Id_TipoApartamento Id Tipo Apartamento
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_TipoApartamento)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_TipoApartamento),
        ]);
    }

    /**
     * Creates a new TipoApartamento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TipoApartamento();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_TipoApartamento' => $model->Id_TipoApartamento]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TipoApartamento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_TipoApartamento Id Tipo Apartamento
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_TipoApartamento)
    {
        $model = $this->findModel($Id_TipoApartamento);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_TipoApartamento' => $model->Id_TipoApartamento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TipoApartamento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_TipoApartamento Id Tipo Apartamento
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_TipoApartamento)
    {
        $this->findModel($Id_TipoApartamento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TipoApartamento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_TipoApartamento Id Tipo Apartamento
     * @return TipoApartamento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_TipoApartamento)
    {
        if (($model = TipoApartamento::findOne(['Id_TipoApartamento' => $Id_TipoApartamento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
