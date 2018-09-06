<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 26.08.2018
 * Time: 19:02
 */

namespace app\components;


use yii\base\Widget;
use app\models\Call;
use Yii;

class FormButtonWidget extends Widget
{
    public function run()
    {


        $call = new Call();

        if($call->load(Yii::$app->request->post()) && $call->Callback()){
            Yii::$app->session->setFlash('success', "Сообщение отправлено! В ближайшее время мы с Вами свяжемся!");
            Yii::$app->getResponse()->redirect(\Yii::$app->request->getReferrer())->send(); # Укажите ссылку
            Yii::$app->end();
        }

        return $this->render('form-button',[
            'call' => $call,
        ]);
    }
}