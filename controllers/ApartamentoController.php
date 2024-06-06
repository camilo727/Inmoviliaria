<?php

namespace app\controllers;

use app\models\Apartamento;
use app\models\searchs\ApartamentoSearchs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ApartamentoController implements the CRUD actions for Apartamento model.
 */
class ApartamentoController extends Controller
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
     * Lists all Apartamento models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ApartamentoSearchs();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Apartamento model.
     * @param int $Id_Apartamento Id Apartamento
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Apartamento)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Apartamento),
        ]);
    }

    /**
     * Creates a new Apartamento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Apartamento();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Apartamento' => $model->Id_Apartamento]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Apartamento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Apartamento Id Apartamento
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Apartamento)
    {
        $model = $this->findModel($Id_Apartamento);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Apartamento' => $model->Id_Apartamento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Apartamento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Apartamento Id Apartamento
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Apartamento)
    {
        $this->findModel($Id_Apartamento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Apartamento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Apartamento Id Apartamento
     * @return Apartamento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Apartamento)
    {
        if (($model = Apartamento::findOne(['Id_Apartamento' => $Id_Apartamento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
