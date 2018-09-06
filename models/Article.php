<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 */
class Article extends \yii\db\ActiveRecord
{
    public $image;

//    public function behaviors()
//    {
//        return [
//            'image' => [
//                'class' => 'rico\yii2images\behaviors\ImageBehave',
//            ]
//        ];
//    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['data'], 'date', 'format'=>'php:Y-m-d'],
            [['data'], 'default', 'value' => date('Y-m-d')],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Контент',
            'data' => 'Дата создания',
        ];
    }
}
