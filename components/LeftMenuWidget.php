<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 29.07.2018
 * Time: 17:14
 */

namespace app\components;


use app\models\Article;
use app\modules\admin\models\Menu;
use app\modules\admin\models\Pages;

class LeftMenuWidget extends \yii\base\Widget
{
    public function run()
    {


        $menus = Menu::find()->all();

        return $this->render('left-menu',[
            'menus' => $menus,
        ]);
    }
}