<?php
namespace frontend\controllers;
header('Content-Type:text/html;charset=utf-8');
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Firmstate;
use app\models\Firmproductserve;
use app\models\Firmtel;
use app\models\FirmHezuo;
use app\models\Firm;
use app\models\FirmNews;
use app\models\FirmLaws;
use app\models\FirmLink;
use app\models\FirmPolicy;

/**
 * Site controller
 */
class DataController extends Controller
{
	public function actionIndex()
    {
    	$this->layout="header";
        print_r(Yii::$app->request->get('info'));
    	$model = new Firmstate();
    	$info = $model->sel();
    	$model2 = new Firmproductserve();
    	$info2 = $model2->sel();
    	return $this->render('index',['info'=>$info,'info2'=>$info2]);  	
    }
    public function actionAbout()
    {
    	$this->layout="header";
    	$model = new Firm();
    	$info = $model->sel();
    	$jieshao = $info['0']['jieshao']; 
    	$content = $info['0']['content']; 
    	// print_r($jieshao);die;
    	return $this->render('about',['jieshao'=>$jieshao,'content'=>$content]);
    }
    public function actionService()
    {
    	$this->layout="header";
    	$model = new Firmproductserve();
    	$info = $model->sel();
    	// print_r($info);die;
    	return $this->render('service',['info'=>$info]);
    }
    public function actionNews()
    {
    	$this->layout="header";
    	/*实例化公司动态表以及查询等操作*/
    	$model = new FirmState();
    	$info = $model->sel2();
    	$info2 = $model->sel3();
    	$title = $info['0']['title'];
    	$content = $info['0']['content'];
        $img = $info['0']['img'];
    	$id = $info['0']['id'];
		/*实例化新闻表以及查询等操作*/
    	$models = new FirmNews();
    	$info3 = $models->sel();
    	$info4 = $models->sel2();
    	$title2 = $info3['0']['title'];
    	$content2 = $info3['0']['content'];
        $img2 = $info3['0']['img'];
    	$id2 = $info3['0']['id'];
    	/*查询的数据传到显示页面*/
    	return $this->render('news',['info'=>$info,'title'=>$title,'content'=>$content,'img'=>$img,'info2'=>$info2,'title2'=>$title2,'content2'=>$content2,'img2'=>$img2,'info4'=>$info4,'id'=>$id,'id2'=>$id2]);
    }
    public function actionPolicy()
    {
    	$this->layout="header";
    	/*实例化法律表以及查询等操作*/
    	$model = new FirmLaws();
    	$info = $model->sel2();
    	$info2 = $model->sel3();
    	$title = $info['0']['title'];
    	$content = $info['0']['content'];
        $img = $info['0']['img'];
    	$id = $info['0']['id'];
		/*实例化政策表以及查询等操作*/
    	$models = new FirmPolicy();
    	$info3 = $models->sel();
    	$info4 = $models->sel2();
    	$title2 = $info3['0']['title'];
    	$content2 = $info3['0']['content'];
        $img2 = $info3['0']['img'];
    	$id2 = $info3['0']['id'];
    	/*查询的数据传到显示页面*/
    	return $this->render('policy',['info'=>$info,'title'=>$title,'content'=>$content,'img'=>$img,'info2'=>$info2,'title2'=>$title2,'content2'=>$content2,'img2'=>$img2,'info4'=>$info4,'id'=>$id,'id2'=>$id2]);
    }
    public function actionContact()
    {
    	$this->layout="header";
    	$model = new FirmLink();
    	$info  = $model->sel();
    	// print_r($info);die;
    	return $this->render('contact',['info'=>$info]);
    }
    public function actionTeam()
    {
    	$this->layout="header";
    	$model = new Firm();
    	$info = $model->sel();
    	$content = $info['0']['content'];
    	// print_r($content)
    	return $this->render('team',['content'=>$content]);
    }
    public function actionCooperation()
    {
    	$this->layout="header";
    	$model = new FirmHezuo();
    	$info = $model->sel();
    	// print_r($info);die;
    	return $this->render('cooperation',['info'=>$info]);
    }
    /*公司动态的更多功能*/
    public function actionMore()
    {
    	$this->layout="header";
        $model = new FirmState();
        $info = $model->sel2();
        $info2 = $model->sel4();
        $title = $info['0']['title'];
        $content = $info['0']['content'];
        $img = $info['0']['img'];
        $addtime = $info['0']['addtime'];
        $id = $info['0']['id'];
    	return $this->render('news_list',['info'=>$info2,'title'=>$title,'content'=>$content,'img'=>$img,'addtime'=>$addtime,'id'=>$id]);
    }
    /*政策解读的更多功能*/
    public function actionPolicylist()
    {
    	$this->layout="header";
    	return $this->render('policy_list');    	
    }
    /*法律法规的展示功能*/
    public function actionLawshow()
    {
    	$this->layout="header";
    	return $this->render('lawshow');
    }
    public function actionMoreshow()
    {
        $this->layout="header";
        $id = $_GET['id'];
        // print_r($id);die;
        $model = new FirmState();
        $info = $model->sel5($id);
        // print_r($info);die;
        $title = $info['title'];
        $content = $info['content'];
        // print_r($content);die;
        $addtime = $info['addtime'];
        $img = $info['img'];
        $fenyeup = $model->sel6($id);
        // print_r($fenyeup);die;
        $fenyedown = $model->sel7($id);
        // print_r($fenyedown);die;
        return $this->render('news_about',['title'=>$title,'content'=>$content,'addtime'=>$addtime,'img'=>$img,'fenyeup'=>$fenyeup,'fenyedown'=>$fenyedown]);
    }
    public function actionServicemore()
    {
        $this->layout="header";
        $id = $_GET['id'];
        $model = new Firmproductserve();
        $info = $model->sel2($id);
        // print_r($info);die;
        return $this->render('service_about',['info'=>$info]);
    }
    public function actionMoreshow2()
    {
        $this->layout="header";
        $id = $_GET['id'];
        // print_r($id);die;
        $model = new FirmNews();
        $info = $model->sel5($id);
        // print_r($info);die;
        $title = $info['title'];
        $content = $info['content'];
        // print_r($content);die;
        $addtime = $info['addtime'];
        $img = $info['img'];
        $fenyeup = $model->sel6($id);
        // print_r($fenyeup);die;
        $fenyedown = $model->sel7($id);
        // print_r($fenyedown);die;
        return $this->render('news_about',['title'=>$title,'content'=>$content,'addtime'=>$addtime,'img'=>$img,'fenyeup'=>$fenyeup,'fenyedown'=>$fenyedown]);       
    }
    public function actionMore2(){
        $this->layout="header";
        $model = new FirmNews();
        $info = $model->sel();
        $info2 = $model->sel4();
        $title = $info['0']['title'];
        $content = $info['0']['content'];
        $img = $info['0']['img'];
        $addtime = $info['0']['addtime'];
        $id = $info['0']['id'];
        return $this->render('news_list',['info'=>$info2,'title'=>$title,'content'=>$content,'img'=>$img,'addtime'=>$addtime,'id'=>$id]);
    }
    public function actionMoreshow3(){
         $this->layout="header";
        $id = $_GET['id'];
        // print_r($id);die;
        $model = new FirmLaws();
        $info = $model->sel5($id);
        // print_r($info);die;
        $title = $info['title'];
        $content = $info['content'];
        // print_r($content);die;
        $addtime = $info['addtime'];
        $img = $info['img'];
        $fenyeup = $model->sel6($id);
        // print_r($fenyeup);die;
        $fenyedown = $model->sel7($id);
        // print_r($fenyedown);die;
        return $this->render('news_about',['title'=>$title,'content'=>$content,'addtime'=>$addtime,'img'=>$img,'fenyeup'=>$fenyeup,'fenyedown'=>$fenyedown]);          
    }
    public function actionMore3(){
        $this->layout="header";
        $model = new FirmLaws();
        $info = $model->sel2();
        $info2 = $model->sel4();
        $title = $info['0']['title'];
        $content = $info['0']['content'];
        $img = $info['0']['img'];
        $addtime = $info['0']['addtime'];
        $id = $info['0']['id'];
        return $this->render('news_list',['info'=>$info2,'title'=>$title,'content'=>$content,'img'=>$img,'addtime'=>$addtime,'id'=>$id]);
    }
    public function actionMoreshow4(){
         $this->layout="header";
        $id = $_GET['id'];
        // print_r($id);die;
        $model = new FirmPolicy();
        $info = $model->sel5($id);
        // print_r($info);die;
        $title = $info['title'];
        $content = $info['content'];
        // print_r($content);die;
        $addtime = $info['addtime'];
        $img = $info['img'];
        $fenyeup = $model->sel6($id);
        // print_r($fenyeup);die;
        $fenyedown = $model->sel7($id);
        // print_r($fenyedown);die;
        return $this->render('news_about',['title'=>$title,'content'=>$content,'addtime'=>$addtime,'img'=>$img,'fenyeup'=>$fenyeup,'fenyedown'=>$fenyedown]);          
    }
    public function actionMore4(){
        $this->layout="header";
        $model = new FirmPolicy();
        $info = $model->sel();
        $info2 = $model->sel4();
        $title = $info['0']['title'];
        $content = $info['0']['content'];
        $img = $info['0']['img'];
        $addtime = $info['0']['addtime'];
        $id = $info['0']['id'];
        return $this->render('news_list',['info'=>$info2,'title'=>$title,'content'=>$content,'img'=>$img,'addtime'=>$addtime,'id'=>$id]);
    }
}