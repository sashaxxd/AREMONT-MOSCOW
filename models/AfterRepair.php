<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "after_repair".
 *
 * @property int $id
 */
class AfterRepair extends \yii\db\ActiveRecord
{

    public $gallery;



    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],

        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'after_repair';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['child_id'], 'number'],
            [['gallery'], 'file', 'extensions' => 'png, jpg, gif, jpeg', 'maxFiles' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
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
