<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property string $id
 * @property string $title
 * @property string $text
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст контактов',
        ];
    }
}
