<?php
/**
 * Created by PhpStorm.
 * User: alex_pc
 * Date: 22.01.2018
 * Time: 16:25
 */

namespace app\controllers;


use app\models\Article;

use yii\data\Pagination;

class ArticleController extends AppController
{
    public  function actionIndex(){


        $this->setMeta('RemontEcoDom | Статьи','ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        $query = Article::find()->orderBy(['id' => SORT_DESC,]);


        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5, 'forcePageParam' => false, 'pageSizeParam' => false ]);
        $articles  = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',[
            'articles' => $articles,
            'pages' => $pages,

        ]);
    }


    public  function actionSingle($id){

        $article = Article::findOne($id);
        $this->setMeta('BossHouse | ' . $article->title, $article->keywords, $article->description );
        if(empty($article)){
            throw new \yii\web\HttpException(404, 'Такой статьи не существует');
        }
        return $this->render('single',[
            'article' => $article,
        ]);
    }

}