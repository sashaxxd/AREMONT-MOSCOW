<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 15.03.2018
 * Time: 13:49
 */

namespace app\controllers;





use app\modules\admin\models\Pages;

class PagesController extends AppController
{


    public function  actionIndex($alias){

       $page = Pages::find()->where(['alias' => $alias])->one();
        $this->setMeta("RemontEcoDom | " . $page->name, '
 ' . $page->name);
       if(!$page){
           throw new \yii\web\HttpException(404, 'Такой страницы не существует');
       }
       return $this->render('index',[
         'page' => $page,

       ]);
   }

}