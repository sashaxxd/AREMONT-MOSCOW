<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "euro_three".
 *
 * @property string $id
 * @property string $name
 * @property string $text
 */
class EuroThree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'euro_three';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Заголовок',
            'text' => 'Контент',
        ];
    }
}
