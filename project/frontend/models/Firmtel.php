<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firm_tel".
 *
 * @property integer $id
 * @property string $logo
 * @property string $name
 * @property string $link
 */
class Firmtel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firm_tel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logo', 'name', 'link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
            'name' => 'Name',
            'link' => 'Link',
        ];
    }
    public function sel(){
        return $info = $this->find()
                            ->limit(2)
                            ->asArray()
                            ->all();
    }
}
