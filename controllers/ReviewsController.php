<?php


namespace app\controllers;

use app\models\Reviews;
use app\modules\admin\models\Schedule;
use yii\data\Pagination;

class ReviewsController extends AppController
{


    public  function actionIndex(){


        $this->setMeta('RemontEcoDom | ОТЗЫВЫ' ,'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        $query = Reviews::find()->orderBy(['id' => SORT_DESC,]);


        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5, 'forcePageParam' => false, 'pageSizeParam' => false ]);
        $reviews = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',[
            'reviews' => $reviews,
            'pages' => $pages,

        ]);
    }
}