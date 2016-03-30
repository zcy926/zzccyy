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
 * @property string $hezuo
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
            [['name', 'logo', 'jieshao', 'hezuo', 'content'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'logo' => 'Logo',
            'jieshao' => 'Jieshao',
            'hezuo' => 'Hezuo',
            'content' => 'Content',
        ];
    }
    public function sel(){
        return $info = $this->find()
                            ->asArray()
                            ->all();
    }
}
