<?php

namespace app\modules\admin\controllers;

use app\models\Services;
use app\models\StandartThree;
use app\models\StandartTwo;
use Yii;
use app\models\StandartOne;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StandartOneController implements the CRUD actions for StandartOne model.
 */
class StandartOneController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all StandartOne models.
     * @return mixed
     */
    public function actionIndex()
    {
        $main = new ActiveDataProvider([
            'query' => Services::find()->where(['id' => 2])
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => StandartOne::find(),
        ]);

        $dataProvider2 = new ActiveDataProvider([
            'query' => StandartTwo::find(),
        ]);

        $dataProvider3 = new ActiveDataProvider([
            'query' => StandartThree::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'data2' => $dataProvider2,
            'data3' => $dataProvider3,
            'main' => $main,
        ]);
    }

    /**
     * Displays a single StandartOne model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new StandartOne model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StandartOne();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StandartOne model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StandartOne model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StandartOne model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return StandartOne the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StandartOne::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
