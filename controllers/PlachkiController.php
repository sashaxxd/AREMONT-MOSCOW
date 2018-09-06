<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 30.08.2018
 * Time: 17:49
 */

namespace app\controllers;


use app\models\Plachki;

class PlachkiController extends AppController
{
    public  function actionIndex(){

        $pl1 = Plachki::findOne(1);
        $this->setMeta("RemontEcoDom | $contact->title",'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        return $this->render('index',[
            'contact' => $contact
        ]);
    }
}