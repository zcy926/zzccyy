<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    </head>
    <body>
    	
  <div class="container">
    <div class="header">
      <div class="header_c">
        <div class="top_left">
          <div class="tel">欢迎致电：</div>
          <div class="tel1">010-12345678</div>
          <div class="gz"><a href="index.php?r=data/contact">关注我们</a></div>
          <div class="QQ">
          <script type="text/javascript">
            var childWindow;
            function toQzoneLogin()
            {
                childWindow = window.open("./zcy1234/1/indexqq.php","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
            } 
            
            function closeChildWindow()
            {
                childWindow.close();
            }
        </script>
            <a href="javascript:void(0);" onclick='toQzoneLogin()'><img src="images/QQ.gif" onmouseover="this.src='images/QQ_over.gif'" border="0" onmouseout="this.src='images/QQ.gif'" /></a>
  <!--           <a href="#"><img src="images/wb.gif" onmouseover="this.src='images/wb_over.gif'" border="0" onmouseout="this.src='images/wb.gif'" /></a>
            <a href="#"><img src="images/wx.gif" onmouseover="this.src='images/wx_over.gif'" border="0" onmouseout="this.src='images/wx.gif'" /></a> -->
          </div>
        </div><!--top_left-->
        <div class="top_right">
          <a href="index.php?r=data/index">首页</a>|<a href="http://www.project.com" onclick="window.external.addFavorite(this.href,this.title);return false;" title='中鼎融德' rel="sidebar">加入收藏</a>
        </div><!--top_right-->
      </div><!--header_c-->
    </div><!--header-->
    <div class="clear"></div>
    <div class="top">
      <div class="top_c">
        <div class="logo"><a href="index.php?r=data/index"><img src="images/logo.png" width="143" height="74" /></a></div>
        <div class="menu">
          <ul>
            <li><a href="index.php?r=data/index">首页</a></li>
            <li><a href="index.php?r=data/about">关于我们</a></li>
            <li><a href="index.php?r=data/service">服务项目</a></li>
            <li><a href="index.php?r=data/news">新闻中心</a></li>
            <li><a href="index.php?r=data/policy">政策法规</a></li>
            <li><a href="index.php?r=data/contact">联系我们</a></li>
          </ul>
        </div><!--menu-->
        <div class="search">
          <div class="search_input"><input type="text" value="SEAECH..."  onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}"/></div>
          <a href="#"><img src="images/search.gif" width="31" height="23" /></a>
        </div><!--search-->
      </div><!--top_c-->
    </div><!--top-->

<?= $content ?>

        <div class="footer">
      <div class="footer_c">
        <div class="footer_left">
          <a href="index.php?r=data/about">关于我们</a>|
          <a href="index.php?r=data/cooperation">合作伙伴</a>|
          <a href="index.php?r=data/contact">联系我们</a>
        </div>
        <div class="footer_right">
        中鼎融德投资担保（北京）有限公司Copyright <span>&copy;</span> 2011-2013 中鼎融德 版权所有
        </div>
      </div>
    </div><!--footer-->
  </div>
    </body>
    </html>

   <!--  <a href="index.php?r=index/index">首页</a>|<a href="http://www.company.com" onclick="window.external.addFavorite(this.href,this.title);return false;" title='中鼎融德' rel="sidebar">加入收藏</a> -->