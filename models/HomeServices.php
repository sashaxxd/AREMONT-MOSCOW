<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home_services".
 *
 * @property string $id
 * @property string $job
 * @property string $material1
 * @property string $material2
 */
class HomeServices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job', 'material1', 'material2'], 'required'],
            [['job', 'material1', 'material2'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ВИД',
            'job' => 'РАБОТА',
            'material1' => 'ЧЕРНОВЫЕ МАТЕРИАЛЫ',
            'material2' => 'ЧИСТОВЫЕ МАТЕРИАЛЫ',
        ];
    }
}
