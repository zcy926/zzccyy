<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firm_productserve".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $content
 */
class FirmProductserve extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firm_productserve';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'img', 'content'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'img' => Yii::t('app', 'Img'),
            'content' => Yii::t('app', 'Content'),
        ];
    }
}
