<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "additionally".
 *
 * @property string $id
 * @property string $name
 * @property string $text
 */
class Additionally extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'additionally';
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
            'name' => 'Название',
            'text' => 'Инфа',
        ];
    }
}
