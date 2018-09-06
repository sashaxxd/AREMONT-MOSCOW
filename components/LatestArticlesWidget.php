<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 29.07.2018
 * Time: 17:14
 */

namespace app\components;


use app\models\Article;

class LatestArticlesWidget extends \yii\base\Widget
{
    public function run()
    {


        $articles = Article::find()->limit(5)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('latest-articles',[
            'articles' => $articles,
        ]);
    }
}