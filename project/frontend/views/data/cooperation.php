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
        <img src="images/about_banner.jpg" width="1920" height="249" />
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"></div>
      <div class="content_c">
        <div class="aside">
          <span>关于我们</span>
          <div class="aside_list">
            <ul>
              <li class="aside_list1"><a href="index.php?r=data/about">公司介绍</a></li>
              <li class="aside_list2"><a href="index.php?r=data/Cooperation" class="aside2_over">合作机构</a></li>
              <li class="aside_list3"><a href="index.php?r=data/team">顾问团队</a></li>
            </ul>
          </div><!--aside_list-->
        </div><!--aside-->
        <div class="right">
          <div class="about_title">合作机构</div>
          <div class="cooperation">
            <ul>
              <?php foreach ($info as $k => $v): ?>
              	
             
              <li><a href="#"><img src="<?php echo $v['logo']?>" width="176" height="48" /></a></li>
          	<?php endforeach ?>
<!--               <li><a href="#"><img src="images/dl.gif" width="167" height="43" /></a></li>
              <li><a href="#"><img src="images/gd.gif" width="109" height="71" /></a></li>
              <li><a href="#"><img src="images/gf.gif" width="165" height="42" /></a></li>
              <li><a href="#"><img src="images/hq.gif" width="143" height="64"/></a></li>
              <li><a href="#"><img src="images/hx.gif" width="194" height="67" /></a></li>
              <li><a href="#"><img src="images/jt.gif" width="194" height="67" /></a></li>
              <li><a href="#"><img src="images/hengx.gif" width="163" height="49"/></a></li>
              <li><a href="#"><img src="images/zx.gif" width="160" height="43" /></a></li> -->
            </ul>
          </div>
        </div><!--right-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>

</body>
</html>
