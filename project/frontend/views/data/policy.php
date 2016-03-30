<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>中鼎融德投资担保有限公司</title>
	<link href="css/css.css" rel="stylesheet" type="text/css" />
	<link href="css/public.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <!--[if IE 6]>
	<script type="text/javascript" src="http://www.we1.com/js/iepng.js"></script>
	<script type="text/javascript">EvPNG.fix('div, img, a, span, dl, li, ul');</script>
	<script type="text/javascript">document.execCommand("BackgroundImageCache", false, true);</script>
	<![endif]-->
</head>
<body>

    <div class="clear"></div>
    <div class="bannerbx">
      <div class="banner">
        <img src="images/policy_banner.jpg" width="1920" height="249" />
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"></div>
      <div class="content_c">
         <div class="news">
           <div class="dt">法律法规<span>LAWS</span></div>
           <div class="news_dt">
             <div class="news_dtl"><a href="index.php?r=data/moreshow3&id=<?php echo $id?>" title="<?php echo $title?>"><img src="<?php echo $img?>" width="164" height="103" /></a></div>
             <div class="news_dtr">
               <ul>
                 <li class="news_dtr1"><a href="index.php?r=data/moreshow3&id=<?php echo $id?>" title="<?php echo $title?>"><?php echo $title?></a></li>
                 <li class="news_dtr2"><?php echo mb_strlen($content2, 'utf-8') > 25  ? mb_substr($content2, 0, 25 , 'utf-8').'....' : $content2; ?></li>
                 <li class="news_dtr3"><a href="index.php?r=data/moreshow3&id=<?php echo $id?>" title="<?php echo $title?>">详细信息</a></li>
               </ul>
             </div><!--news_dtr-->
             <div class="clear"></div>
           </div><!--news_dt-->
           <div class="news_xl">
               <ul>
               <?php foreach ($info2 as $k => $v): ?>
                  <li><a href="index.php?r=data/moreshow3&id=<?php echo $v['id']?>" title="<?php echo $v['title']?>"><?php echo $v['title']?></a><span><?php echo $v['addtime']?></span></li>                
               <?php endforeach ?>
<!--                  <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
               --> </ul>
             </div><!--news_xl-->
             <div class="clear"></div>
             <div class="news_more"><a href="index.php?r=data/more3">更多>></a></div>
         </div><!--news-->
         <div class="news news_right">
           <div class="dt">政策解读<span>POLICY</span></div>
           <div class="news_dt">
             <div class="news_dtl"><a href="index.php?r=data/moreshow4&id=<?php echo $id2?>" title="<?php echo $title?>"><img src="<?php echo $img2?>" width="164" height="103" /></a></div>
             <div class="news_dtr">
               <ul>
                 <li class="news_dtr1"><a href="index.php?r=data/moreshow4&id=<?php echo $id2?>" title="<?php echo $title2?>"><?php echo $title2?></a></li>
                 <li class="news_dtr2"><?php echo mb_strlen($content2, 'utf-8') > 25  ? mb_substr($content2, 0, 25 , 'utf-8').'....' : $content2; ?></li>
                 <li class="news_dtr3"><a href="index.php?r=data/moreshow4&id=<?php echo $id2?>">详细信息</a></li>
               </ul>
             </div><!--news_dtr-->
             <div class="clear"></div>
           </div><!--news_dt-->
           <div class="news_xl">
               <ul>
               <?php foreach ($info4 as $k => $v): ?>
                  <li><a href="index.php?r=data/moreshow4&id=<?php echo $v['id']?>" title="<?php echo $v['title']?>"><?php echo $v['title']?></a><span><?php echo $v['addtime']?></span></li>                
               <?php endforeach ?>
<!--                  <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
               --> </ul>
             </div><!--news_xl-->
             <div class="clear"></div>
             <div class="news_more"><a href="index.php?r=data/more4">更多>></a></div>
         </div><!--news-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>

</body>
</html>
