<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property string $id
 * @property string $title
 * @property string $text
 * @property string $srok
 */
class Portfolio extends \yii\db\ActiveRecord
{

    public $gallery;

    public $gallery2;

    public function behaviors()
    {
        return [
            'gallery' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],

        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'srok'], 'required'],
            [['text'], 'string'],
            [['title', 'srok'], 'string', 'max' => 255],
            [['gallery'], 'file', 'extensions' => 'png, jpg, gif, jpeg', 'maxFiles' => 6],
            [['gallery2'], 'file', 'extensions' => 'png, jpg, gif, jpeg', 'maxFiles' => 6],
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
            'text' => 'Текст',
            'srok' => 'Срок работ',
            'gallery' => 'До ремонта',
            'gallery2' => 'После ремонта'
        ];
    }


    public function getBef(){
        return $this->hasOne(BeforeRepair::className(), ['child_id' => 'id']);
    }

    public function getAft(){
        return $this->hasOne(AfterRepair::className(), ['child_id' => 'id']);
    }


    public function uploadGallery(){
        if($this->validate()){

            foreach($this->gallery as $file){
                $path = 'uploads/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }

            return true;
        }else{
            return false;
        }
    }

}
