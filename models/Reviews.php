<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property string $id
 * @property string $name
 * @property string $city
 * @property string $otzyv
 */
class Reviews extends \yii\db\ActiveRecord
{

    public $image;


    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'city', 'otzyv'], 'required'],
            [['otzyv'], 'string'],
            [['name', 'city'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'jpg,png']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя Фамилия',
            'city' => 'Город',
            'otzyv' => 'Отзыв',
            'image' => 'Фотка',
        ];
    }

    public  function  upload(){
        if($this->validate()){
            $path = 'uploads/store/'. $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            @unlink($path);
            return true;
        }
        else{
            return false;
        }
    }
}
