<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firm_state".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $addtime
 * @property string $img
 */
class FirmState extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firm_state';
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
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'addtime' => 'Addtime',
            'img' => 'Img',
        ];  
    }
    public function sel(){
        return $info = $this->findBysql("select * from firm_state ORDER BY id desc")
                            ->asArray()
                            ->all();
    }
    public function sel2(){
        return $info = $this->findBysql("select * from firm_state ORDER BY id DESC limit 1")
                            ->asArray()
                            ->all(); 
    }
    public function sel3(){
         return $info = $this->findBysql("select * from firm_state order by id desc limit 1,3")
                            ->asArray()
                            ->all();       
    }
    public function sel4(){
        return $info = $this->findBysql("select * from firm_state order by id desc")
                            ->asArray()
                            ->all();
    }
    public function sel5($id){
        $sql = "select * from firm_state where id=$id";
        return $info =\Yii::$app->db->createCommand($sql)->queryOne();
    }
    public function sel6($id){
        $sql = "select * from firm_state where id < $id order by id desc  limit 1";
         return $info =\Yii::$app->db->createCommand($sql)->queryOne();
       
    }
    public function sel7($id){
        $sql = "select * from firm_state where id > $id order by id asc  limit 1";
         return $info =\Yii::$app->db->createCommand($sql)->queryOne();
       
    }
}
