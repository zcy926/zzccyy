<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\FirmAdminuser;
class AdminController extends Controller
{
	public function actionLogin()
	{
    	$this->layout=false;
    	return $this->render('index');  			
	}
	public $enableCsrfValidation = false;
	public function actionDologin()
	{
		$this->layout="header";
		// $arr = $_POST;
		// print_r($arr);
		// $username = $_POST['username'];
		// $pwd = $_POST['pwd'];
		$model = new FirmAdminuser();
		$info = $model->checkall();
		// print_r($info);die;
		if($info){
    		return $this->render('admin');  			
		}else{
			echo '账号或密码错误';
		}
	}
	public function actionFirm(){
		$this->layout="header";	
    	return $this->render('firm');  					
	}
}


?>