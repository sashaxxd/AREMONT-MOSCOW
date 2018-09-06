<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 30.08.2018
 * Time: 13:49
 */

namespace app\controllers;


use app\models\Price;

class PriceController extends AppController
{
    public  function actionIndex(){

        $price = Price::findOne(1);
        $this->setMeta("RemontEcoDom | $price->name",'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        return $this->render('index',[
            'price' => $price
        ]);
    }
}