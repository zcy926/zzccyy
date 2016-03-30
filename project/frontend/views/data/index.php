<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>中鼎融德投资担保有限公司</title>
	<link href="css/index.css" rel="stylesheet" type="text/css" />
	<link href="css/public.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.jslides.js"></script>
    <script type="text/javascript" src="js/bigpicroll.js"></script>
    <!--[if IE 6]>
	<script type="text/javascript" src="http://www.we1.com/js/iepng.js"></script>
	<script type="text/javascript">EvPNG.fix('div, img, a, span, dl, li, ul');</script>
	<script type="text/javascript">document.execCommand("BackgroundImageCache", false, true);</script>
	<![endif]-->
</head>
<body>

    <div class="clear"></div>
    <div class="banner">
      <div id="full-screen-slider">
          <ul id="slides">
              <li style="background:url(images/banner1.jpg) no-repeat center top"><a href="#" target="_blank"></a></li>
              <li style="background:url(images/banner1.jpg) no-repeat center top"><a href="#" target="_blank"></a></li>
          </ul>
      </div>
    </div><!--banner-->
    <div class="clear"></div>
    <div class="content">
      <div class="news">
        <div class="hdwrap">
  <div class="hdflash f_list">
  <div class="flash_tab">
    <div class="tabs f_tabs">
      <ul>
        <li class="f_tab opdiv">
          <a href="javascript:void(0);">
          </a>
        </li>
        <li class="f_tab opdiv">
          <a href="javascript:void(0);">
          </a>
        </li>

      </ul>
    </div>
    <div class="news_more"><a href="index.php?r=data/more">more+</a></div>
  </div>
  <div class="clear"></div>
  <div class="flashlist">

  <?php foreach ($info as $k => $v): ?>
    
  
    <div class="f_out">

      <a href="index.php?r=data/moreshow&id=<?php echo $v['id']?>" target="_blank" title="<?php echo $v['title']?>">
        <img src="<?php echo $v['img']?>" width="254" height="156" />
      </a>
      <div class="picintro">
        <h2>
          <a href="#">
            <?php echo $v['title']?>
          </a>
        </h2>

      </div>
    </div>
<?php endforeach ?>


    <div class="f_out">
     <a href="#" target="_blank">
        <img src="images/news_pic.gif" width="254" height="156" />
      </a>
      <div class="picintro">
        <h2>
          <a href="#">
            担保业涉水互联网金融
          </a>
        </h2>
        
      </div>
    </div>

  </div>
  
  <script type="text/javascript">
    FeatureList(".f_list", {
      "onclass": "noopdiv",
      "offclass": "opdiv",
      "pause_on_act": "mouseover",
      "interval": 5000,
      "speed": 5
    });
  </script>
</div>
</div>
      </div><!--news-->
      <div class="gsdt">
        <div class="gsdt_top">
          <div class="dt">公司动态<span>DYNAMIC</span></div>
          <a href="index.php?r=data/more">more+</a>
        </div><!--gsdt_top-->
        <div class="clear"></div>
        
        <?php foreach ($info as $k => $v) {?>
          <div class="gsdt_list">
            <span><a href="index.php?r=data/moreshow&id=<?php echo $v['id']?>" title="<?php echo $v['title']?>"><?php echo $v['title']?></a></span>
<!--             <?php echo $v['content']?>
 -->            <?php echo mb_strlen($v['content'], 'utf-8') > 50  ? mb_substr($v['content'], 0, 50 , 'utf-8').'....' : $v['content']; ?>

          </div>
        <?php }?>

        <!--gsdt_list-->

<!--         <div class="gsdt_list">
          <span>三部门加强小额担保贷款财政贴息资金管理</span>
          各省、自治区、直辖市、计划单列市财政厅(局)、人力资源社会保障厅(局)，中国人民银行上海总部……
        </div> -->

        <!--gsdt_list-->
      </div><!--gsdt-->
      <div class="pro">
        <div class="gsdt_top">
          <div class="dt">产品服务<span>PRODUCT</span></div>
          <a href="index.php?r=data/service">more+</a>
        </div><!--gsdt_top-->
        <div class="clear"></div>
        <div class="pro_list">
          <ul>
<!--              <li><a href="#"><img src="images/pro1_icn.gif" /><span>经济合同担保</span></a></li>
 -->             <?php foreach ($info2 as $k => $v): ?>
             <li class="pro_left"><a href="index.php?r=data/servicemore&id=<?php echo $v['id']?>" title="<?php echo $v['name']?>"><img src="<?php echo $v['img']?>" title="<?php echo $v['name']?>"/><span><?php echo $v['name']?></span></a></li>
             <?php endforeach ?>
<!--              <li class="pro_left"><a href="#"><img src="images/pro2_icn.gif" /><span>履约担保</span></a></li>
          
             <li><a href="#"><img src="images/pro4_icn.gif" /><span>诉讼保全担保</span></a></li>
             <li class="pro_left"><a href="#"><img src="images/pro5_icn.gif" /><span>原材料赊购担保</span></a></li>
             <li class="pro_left"><a href="#"><img src="images/pro6_icn.gif" /><span>咨询顾问</span></a></li>
 -->          </ul>
        </div><!--pro_list-->
      </div><!--pro-->
    </div><!--content-->
    <div class="clear"></div>
    <div class="zcfg">
      <div class="zcfg_c">
        <div class="zcfg_1"><img src="images/zcfg_left.gif" width="141" height="77" /></div>
        <div class="zcfg_2"><img src="images/zcfg_center.gif" width="304" height="77"/></div>
        <div class="zcfg_3">
          <ul>
            <li><a href="index.php?r=data/lawshow">法律法规</a></li>
            <li><a href="index.php?r=data/policylist">政策解读</a></li>
          </ul>
        </div>
        <div class="zcfg_4">010-12345678</div>
        <div class="zcfg_5">DanBao@163.com</div>
      </div><!--zcfg_c-->
    </div><!--zcfg-->
    <div class="clear"></div>
<!--container-->
</body>
</html>
