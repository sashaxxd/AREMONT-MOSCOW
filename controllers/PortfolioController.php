<?php
/**
 * Created by PhpStorm.
 * User: alex_pc
 * Date: 22.01.2018
 * Time: 16:25
 */

namespace app\controllers;




use app\models\Portfolio;
use yii\data\Pagination;

class PortfolioController extends AppController
{
    public  function actionIndex(){



        $query = Portfolio::find()->orderBy(['id' => SORT_DESC,]);


        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5, 'forcePageParam' => false, 'pageSizeParam' => false ]);
        $portfolio  = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('RemontEcoDom | ПОРТФОЛИО' ,'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');

        return $this->render('index',[
            'portfolio' => $portfolio,
            'pages' => $pages,

        ]);
    }



}