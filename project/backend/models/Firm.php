<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firm".
 *
 * @property integer $id
 * @property string $name
 * @property string $logo
 * @property string $jieshao
 * @property string $content
 */
class Firm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'logo', 'jieshao', 'content'], 'string', 'max' => 255]
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
            'logo' => Yii::t('app', 'Logo'),
            'jieshao' => Yii::t('app', 'Jieshao'),
            'content' => Yii::t('app', 'Content'),
        ];
    }
}
