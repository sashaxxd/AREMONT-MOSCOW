<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 28.08.2018
 * Time: 14:06
 */

namespace app\controllers;


use app\models\Contact;

class ContactController extends AppController
{
      public  function actionIndex(){

          $contact = Contact::findOne(1);
          $this->setMeta("RemontEcoDom | $contact->title",'ремонт квартир, дизайн интерьера, отделка, Москва',
              'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
          return $this->render('index',[
              'contact' => $contact
          ]);
      }
}