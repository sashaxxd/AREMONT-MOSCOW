<?php

namespace app\modules\admin\controllers;

use app\models\EuroThree;
use app\models\EuroTwo;
use app\models\Services;
use Yii;
use app\models\EuroOne;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EuroOneController implements the CRUD actions for EuroOne model.
 */
class EuroOneController extends Controller
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
     * Lists all EuroOne models.
     * @return mixed
     */
    public function actionIndex()
    {
        $main = new ActiveDataProvider([
            'query' => Services::find()->where(['id' => 1])
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => EuroOne::find(),
        ]);

        $dataProvider2 = new ActiveDataProvider([
            'query' => EuroTwo::find(),
        ]);

        $dataProvider3 = new ActiveDataProvider([
            'query' => EuroThree::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'data2' => $dataProvider2,
            'data3' => $dataProvider3,
            'main' => $main,
        ]);
    }

    /**
     * Displays a single EuroOne model.
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


    public function actionView2($id)
    {
        return $this->render('view2', [
            'model' => $this->findModel2($id),
        ]);


    }




    /**
     * Creates a new EuroOne model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EuroOne();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EuroOne model.
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
     * Deletes an existing EuroOne model.
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
     * Finds the EuroOne model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EuroOne the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EuroOne::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }



}
