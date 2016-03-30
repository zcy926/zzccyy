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
              <li class="aside_list4"><a href="#" class="aside5_over">公司动态</a></li>
              <li class="aside_list5"><a href="#" >行业新闻</a></li>
            </ul>
          </div><!--aside_list-->
        </div><!--aside-->
        <div class="right">
          <div class="about_title">行业新闻</div>
          <div class="about_nr">
             <div class="news_listop">
                <div class="news_listopl"><a href="index.php?r=data/moreshow&id=<?php echo $id?>"><img src="<?php echo $img?>" width="125" height="80" /><a></div>
                <div class="news_listopr">
                  <ul>
                    <li class="news_sa"><span><?php echo $addtime?></span><a href="index.php?r=data/moreshow&id=<?php echo $id?>"><?php echo $title?></a></li>
                    <li class="news_dtr2"><?php echo $content?></li>
                    <li class="news_dtr3"><a href="index.php?r=data/moreshow&id=<?php echo $id?>">> 详情</a></li>
                  </ul>
                </div>
             </div><!--news_listop-->
             <div class="clear"></div>
             <div class="news_xl news_xl1">
               <ul>
               <?php foreach ($info as $k => $v): ?>
                   <li><a href="index.php?r=data/moreshow&id=<?php echo $v['id']?>"><?php echo $v['title']?></a><span><?php echo $v['addtime']?></span></li>               
               <?php endforeach ?>
<!--                  <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li> -->
               </ul>
             </div><!--news_xl-->
             <div class="clear"></div>
             <div class="page">
               <ul>
                 <li><img src="images/page1.png" /></li>
                 <li><img src="images/page2.png" /></li>
                 <li class="" ="pages pages_over"><a href="#">1</a></li>
                 <li class="pages"><a href="#">2</a></li>
                 <li class="pages"><a href="#">3</a></li>
                 <li><a href="#"><img src="images/page3_over.png" /></a></li>
                 <li><a href="#"><img src="images/page4_over.png" /></a></li>
                 <li><input type="text" /></li>
                 <li class="pagen">/3  页</li>
               </ul>
             </div><!--page-->
          </div>
        </div><!--right-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>

</body>
</html>
