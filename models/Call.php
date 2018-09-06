<?php
namespace app\models;
use Yii;


class Call extends \yii\base\Model{
    public $name;
    public $phone;


    public function rules()
    {
        return [
            [['name', 'email','course' ], 'required'],
            [['name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 255],


        ];
    }

    public function attributeLabels()
    {
        return [
            'phone' => 'Телефон',
            'name' => 'Имя',

        ];
    }



    public function Callback(){


        $subject="РЕМОНТ КВАРТИР В МОСКВЕ ПОД КЛЮЧ";


            $msg="Имя: $this->name\nТелефон: $this->phone";



        $mail = Yii::$app->mailer->compose()
            ->setTo('webgrodno@yandex.by')
            ->setSubject($subject)
            ->setTextBody($msg)
            ->send();
        return $mail ;

    }
}