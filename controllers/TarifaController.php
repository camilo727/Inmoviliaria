<?php

namespace app\controllers;

use app\models\Tarifa;
use app\models\searchs\TarifaSearchs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TarifaController implements the CRUD actions for Tarifa model.
 */
class TarifaController extends Controller
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
     * Lists all Tarifa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TarifaSearchs();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tarifa model.
     * @param int $Id_Tarifa Id Tarifa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Tarifa)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Tarifa),
        ]);
    }

    /**
     * Creates a new Tarifa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tarifa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Tarifa' => $model->Id_Tarifa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tarifa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Tarifa Id Tarifa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Tarifa)
    {
        $model = $this->findModel($Id_Tarifa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Tarifa' => $model->Id_Tarifa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tarifa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Tarifa Id Tarifa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Tarifa)
    {
        $this->findModel($Id_Tarifa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tarifa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Tarifa Id Tarifa
     * @return Tarifa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Tarifa)
    {
        if (($model = Tarifa::findOne(['Id_Tarifa' => $Id_Tarifa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
