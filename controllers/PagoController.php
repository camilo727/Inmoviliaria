<?php

namespace app\controllers;

use app\models\Pago;
use app\models\searchs\PagoSearchs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PagoController implements the CRUD actions for Pago model.
 */
class PagoController extends Controller
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
     * Lists all Pago models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PagoSearchs();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pago model.
     * @param int $Id_Pago Id Pago
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Pago)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Pago),
        ]);
    }

    /**
     * Creates a new Pago model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pago();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Pago' => $model->Id_Pago]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pago model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Pago Id Pago
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Pago)
    {
        $model = $this->findModel($Id_Pago);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Pago' => $model->Id_Pago]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pago model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Pago Id Pago
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Pago)
    {
        $this->findModel($Id_Pago)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pago model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Pago Id Pago
     * @return Pago the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Pago)
    {
        if (($model = Pago::findOne(['Id_Pago' => $Id_Pago])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
