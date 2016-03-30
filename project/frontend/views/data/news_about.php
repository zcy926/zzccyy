<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>中鼎融德投资担保（北京）有限公司</title>
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
        <img src="images/news_banner.jpg" width="1920" height="249" />
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"></div>
      <div class="content_c">
        <div class="aside">
          <span>新闻中心</span>
          <div class="aside_list">
            <ul>
              <li class="aside_list4"><a href="#" class="aside4_over">公司动态</a></li>
              <li class="aside_list5"><a href="#">行业新闻</a></li>
            </ul>
          </div><!--aside_list-->
        </div><!--aside-->
        <div class="right">
          <div class="about_title">公司动态</div>
          <div class="about_nr">
            <div class="news_title">
              <b><?php echo $title?></b>
              <span>发布时间：<?php echo $addtime?> 来源：市场部 作者：市场部</span>
            </div>

<p><?php echo $content?></p>
<p>(责任编辑：admin)</p>
          <div class="news_next">
            <div class="news_nextl">
              <ul>
              <?php if ($fenyeup): ?>
                <li><a href="index.php?r=data/moreshow&id=<?php echo $fenyeup['id']?>">上一篇：<?php echo $fenyeup['title']?></a></li>
                <?php endif ?>

                <?php if ($fenyedown): ?>
                  <li><a href="index.php?r=data/moreshow&id=<?php echo $fenyedown['id']?>">下一篇：<?php echo $fenyedown['title']?></a></li>
                <?php endif ?>
                
              </ul>
            </div><!--news_nextl-->
            <div class="news_nextr">
              <a href="#">返回列表</a>
            </div><!--news_nextr-->
          </div><!--news_next-->
          </div><!--about_nr-->
        </div><!--right-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>
   