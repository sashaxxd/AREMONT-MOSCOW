<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\EuroThree;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EuroThreeController implements the CRUD actions for EuroThree model.
 */
class EuroThreeController extends Controller
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
     * Lists all EuroThree models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EuroThree::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EuroThree model.
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
     * Creates a new EuroThree model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EuroThree();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EuroThree model.
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
     * Deletes an existing EuroThree model.
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
     * Finds the EuroThree model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EuroThree the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EuroThree::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
