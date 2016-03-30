<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firm_hezuo".
 *
 * @property integer $id
 * @property string $name
 * @property string $logo
 */
class FirmHezuo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firm_hezuo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'logo'], 'string', 'max' => 255]
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
        ];
    }
}
