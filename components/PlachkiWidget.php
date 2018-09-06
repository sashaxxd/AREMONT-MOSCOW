<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 30.08.2018
 * Time: 16:27
 */

namespace app\components;
use yii\base\Widget;

class PlachkiWidget extends Widget
{
    public function run()
    {


//        $call = new Call();
//
//        if($call->load(Yii::$app->request->post()) && $call->Callback()){
//            Yii::$app->session->setFlash('success', "Сообщение отправлено! В ближайшее время мы с Вами свяжемся!");
//            Yii::$app->getResponse()->redirect(\Yii::$app->request->getReferrer())->send(); # Укажите ссылку
//            Yii::$app->end();
//        }

        return $this->render('plachki',[
//            'call' => $call,
        ]);
    }
}