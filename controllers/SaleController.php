<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 30.08.2018
 * Time: 18:22
 */

namespace app\controllers;


use app\models\Sale;

class SaleController extends AppController
{
    public  function actionIndex(){

        $sale = Sale::findOne(1);
        $this->setMeta("RemontEcoDom | $sale->name",'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        return $this->render('index',[
            'sale' => $sale
        ]);
    }
}