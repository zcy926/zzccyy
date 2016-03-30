<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firm_link".
 *
 * @property integer $id
 * @property string $name
 * @property string $logo
 * @property string $link
 */
class FirmLink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firm_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'logo', 'link'], 'string', 'max' => 255]
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
            'link' => Yii::t('app', 'Link'),
        ];
    }
}
