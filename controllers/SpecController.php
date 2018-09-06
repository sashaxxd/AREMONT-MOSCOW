<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 30.08.2018
 * Time: 18:23
 */

namespace app\controllers;


use app\models\Spec;

class SpecController extends AppController
{
    public  function actionIndex(){

        $spec = Spec::findOne(1);
        $this->setMeta("RemontEcoDom | $spec->name",'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        return $this->render('index',[
            'spec' => $spec
        ]);
    }
}