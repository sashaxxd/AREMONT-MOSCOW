<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 26.08.2018
 * Time: 9:27
 */

namespace app\controllers;


use app\models\EconomyOne;
use app\models\EconomyThree;
use app\models\EconomyTwo;
use app\models\EuroOne;
use app\models\EuroThree;
use app\models\EuroTwo;
use app\models\InteriorDesignOne;
use app\models\RepairDecorationOne;
use app\models\Services;
use app\models\StandartOne;
use app\models\StandartThree;
use app\models\StandartTwo;

class ServicesController extends AppController
{
    public  function actionEuroRepair(){

        $euro = Services::findOne(1);
        $this->setMeta("RemontEcoDom | $euro->title" ,'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        $EuroOne = EuroOne::find()->all();
        $EuroTwo = EuroTwo::find()->all();
        $EuroThree = EuroThree::find()->all();
        return $this->render('euro',[
            'euro' => $euro,
            'EuroOne' => $EuroOne,
            'EuroTwo' => $EuroTwo,
            'EuroThree' => $EuroThree,
        ]);
    }

    public  function actionStandard(){
        $standard = Services::findOne(2);
        $this->setMeta("RemontEcoDom | $standard->title" ,'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        $StandardOne = StandartOne::find()->all();
        $StandardTwo = StandartTwo::find()->all();
        $StandardThree = StandartThree::find()->all();
        return $this->render('standard',[
            'standard' => $standard,
            'StandardOne' => $StandardOne,
            'StandardTwo' => $StandardTwo,
            'StandardThree' => $StandardThree,
        ]);
    }


    public  function actionEconomy(){
        $economy = Services::findOne(3);
        $this->setMeta("RemontEcoDom | $economy->title" ,'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        $EconomyOne = EconomyOne::find()->all();
        $EconomyTwo = EconomyTwo::find()->all();
        $EconomyThree = EconomyThree::find()->all();
        return $this->render('economy',[
            'economy' => $economy,
            'EconomyOne' => $EconomyOne,
            'EconomyTwo' => $EconomyTwo,
            'EconomyThree' => $EconomyThree,
        ]);
    }


    public  function actionRepairDecoration(){
        $repair = Services::findOne(4);
        $this->setMeta("RemontEcoDom | $repair->title" ,'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        $RepairOne = RepairDecorationOne::find()->all();
        return $this->render('repair-decoration',[
            'repair' => $repair,
            'RepairOne' => $RepairOne,

        ]);
    }


    public  function actionInteriorDesign(){
        $design = Services::findOne(5);
        $this->setMeta("RemontEcoDom | $design->title" ,'ремонт квартир, дизайн интерьера, отделка, Москва',
            'Профессиональный ремонт квартир и дизайн интерьера от Ремонт Эко-Дом Москва');
        $DesignOne = InteriorDesignOne::find()->all();
        return $this->render('interior-design',[
            'design' => $design,
            'DesignOne' => $DesignOne,
        ]);
    }
}