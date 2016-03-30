<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firm_laws".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $img
 * @property string $addtime
 */
class FirmLaws extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firm_laws';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['addtime'], 'safe'],
            [['title', 'content', 'img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
            'img' => Yii::t('app', 'Img'),
            'addtime' => Yii::t('app', 'Addtime'),
        ];
    }
}
