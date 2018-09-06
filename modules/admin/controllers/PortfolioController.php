<?php

namespace app\modules\admin\controllers;

use app\models\AfterRepair;
use app\models\BeforeRepair;
use Yii;
use app\models\Portfolio;
use app\modules\admin\models\PortfolioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PortfolioController implements the CRUD actions for Portfolio model.
 */
class PortfolioController extends Controller
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
     * Lists all Portfolio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PortfolioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Portfolio model.
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
     * Creates a new Portfolio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Portfolio();
        $before_repair = new BeforeRepair();
        $after_repair = new AfterRepair();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $before_repair->gallery = UploadedFile::getInstances($model, 'gallery');


            $after_repair->gallery = UploadedFile::getInstances($model, 'gallery2');

            $before_repair->child_id = $model->id;
            $before_repair->save();
            $before_repair->uploadGallery();

            $after_repair->child_id = $model->id;
            $after_repair->save();
            $after_repair->uploadGallery();



            Yii::$app->session->setFlash('success', "Работа {$model->title} добавлена");

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Portfolio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $before_repair = new BeforeRepair();
        $after_repair = new AfterRepair();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {


            $before_repair->gallery = UploadedFile::getInstances($model, 'gallery');


            $after_repair->gallery = UploadedFile::getInstances($model, 'gallery2');


            if(!empty($before_repair->gallery)){
                $before = BeforeRepair::find()->where(['child_id' => $id])->one();
                $before->delete();
                $before->removeImages();
            }
            if($before_repair->gallery){
                $before_repair->child_id = $id;
                $before_repair->save();
                $before_repair->uploadGallery();
            }


            if(!empty($after_repair->gallery)){
                $after = AfterRepair::find()->where(['child_id' => $id])->one();
                $after->delete();
                $after->removeImages();
            }
            if($after_repair->gallery){
                $after_repair->child_id = $id;
                $after_repair->save();
                $after_repair->uploadGallery();
            }


            Yii::$app->session->setFlash('success', "Работа {$model->title} изменена");

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Portfolio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $before = BeforeRepair::find()->where(['child_id' => $id])->one();
        $before->delete();
        $before->removeImages();

        $after = AfterRepair::find()->where(['child_id' => $id])->one();
        $after->delete();
        $after->removeImages();

        $this->findModel($id)->removeImages();
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', "Работа удалена");
        return $this->redirect(['index']);
    }


    /**
     * Finds the Portfolio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Portfolio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Portfolio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
