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
            'id' => 'ID',
            'name' => 'Name',
            'img' => 'Img',
            'content' => 'Content',
        ];
    }
    public function sel(){
        return $info = $this->find()
                            ->asArray()
                            ->all();
    }
    public function sel2($id){
        $sql = "select * from firm_productserve where id=$id";
        return $info =\Yii::$app->db->createCommand($sql)->queryOne();
    }
}
