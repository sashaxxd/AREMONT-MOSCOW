<?php

namespace app\modules\admin\controllers;

use app\models\EconomyThree;
use app\models\EconomyTwo;
use app\models\Services;
use Yii;
use app\models\EconomyOne;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EconomyOneController implements the CRUD actions for EconomyOne model.
 */
class EconomyOneController extends Controller
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
//                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EconomyOne models.
     * @return mixed
     */
    public function actionIndex()
    {
        $main = new ActiveDataProvider([
            'query' => Services::find()->where(['id' => 3])
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => EconomyOne::find(),
        ]);

        $dataProvider2 = new ActiveDataProvider([
            'query' => EconomyTwo::find(),
        ]);

        $dataProvider3 = new ActiveDataProvider([
            'query' => EconomyThree::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'data2' => $dataProvider2,
            'data3' => $dataProvider3,
            'main' => $main,
        ]);
    }

    /**
     * Displays a single EconomyOne model.
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
     * Creates a new EconomyOne model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EconomyOne();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EconomyOne model.
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
     * Deletes an existing EconomyOne model.
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
     * Finds the EconomyOne model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EconomyOne the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EconomyOne::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
