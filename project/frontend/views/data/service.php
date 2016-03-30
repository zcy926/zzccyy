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
        <img src="images/service_banner.jpg" width="1920" height="249" />
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"></div>
      <div class="content_c">
        <?php foreach ($info  as $k => $v): ?>
         <div class="service">
            <div class="sercice_l"><a href="index.php?r=data/servicemore&id=<?php echo $v['id']?>" title="<?php echo $v['name']?>"><img src="<?php echo $v['img']?>" width="117" height="110" /></a></div>
            <div class="sercice_r">
              <b><?php echo $v['name']?></b>
              <span> <?php echo mb_strlen($v['content'], 'utf-8') > 25  ? mb_substr($v['content'], 0, 25 , 'utf-8').'....' : $v['content']; ?></span>
              <a href="index.php?r=data/servicemore&id=<?php echo $v['id']?>">了解详情</a>
            </div>
         </div>
        <?php endforeach ?>
         <!--service-->

<!--            <div class="service service_jg">
              <div class="sercice_l"><img src="images/ser_icn1.png" width="117" height="110" /></div>
              <div class="sercice_r">
                <b>贷款担保</b>
                <span>和小额贷款公司进行合作，针对小额贷款项目，为资金需求方提供担保，以解决中小企业资金需求。</span>
                <a href="service_about.html">了解详情</a>
              </div>
           </div><!--service-->

<!--            <div class="service service_jg">
              <div class="sercice_l"><img src="images/ser_icn2.png" width="117" height="110" /></div>
              <div class="sercice_r">
                <b>履约担保</b>
                <span>履约担保包括：工程担保、其他履约担保。</span>
                <a href="#">了解详情</a>
              </div>
           </div> --><!--service-->

           <div class="line1"></div>
<!--            <div class="service">
              <div class="sercice_l"><img src="images/ser_icn3.png" width="117" height="110" /></div>
              <div class="sercice_r">
                <b>诉讼保全担保</b>
                <span>诉讼保全担保包括：诉前财产保全担保、诉讼财产保全担保、财产执行担保。</span>
                <a href="#">了解详情</a>
              </div>
           </div> --><!--service-->

 <!--           <div class="service service_jg">
              <div class="sercice_l"><img src="images/ser_icn4.png" width="117" height="110" /></div>
              <div class="sercice_r">
                <b>原材料赊购担保</b>
                <span>主要针对采购企业和原材料供应商签订的采购合同提供担保，从而满足采购企业进行资金周转以及一定期限内进行最高保证担保履行。</span>
                <a href="#">了解详情</a>
            </div>
         </div> --><!--service-->

 <!--         <div class="service service_jg">
            <div class="sercice_l"><img src="images/ser_icn5.png" width="117" height="110" /></div>
            <div class="sercice_r">
              <b>咨询顾问</b>
              <span>担保业务有关的投融资咨询和财务顾问等中介服务。</span>
              <a href="#">了解详情</a>
            </div>
         </div>  --><!--service-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>

</body>
</html>
