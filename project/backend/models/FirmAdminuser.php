<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firm_adminuser".
 *
 * @property integer $id
 * @property string $username
 * @property string $pwd
 */
class FirmAdminuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firm_adminuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'pwd'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'pwd' => 'Pwd',
        ];
    }
    public function checkall()
    {
        
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        // $pwd=md5(sha1($_POST['pwd'],true));
        $result = $this->findOne(['username'=>$username,'pwd'=>$pwd]);
        return $result;       
    }
}
