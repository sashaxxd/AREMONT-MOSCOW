<?php

namespace app\modules\admin\Models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property string $id
 * @property string $content
 * @property string $keywords
 * @property string $description
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'keywords', 'description', 'title'], 'required'],
            [['content'], 'string'],
            [['keywords', 'description', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок',
            'id' => 'ID',
            'content' => 'Контент',
            'keywords' => 'мета тег - Ключевые слова',
            'description' => 'мета тег - Описание',
        ];
    }
}
