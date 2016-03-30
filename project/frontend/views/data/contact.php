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
        <img src="images/contact_banner.jpg" width="1920" height="249" />
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"></div>
      <div class="content_c contact">
        <div class="contact_title">联系我们</div>

        <?php foreach ($info as $k => $v): ?>
        <div class="contact_t">
          <img src="<?php echo $v['logo']?>" />
          <b><?php echo $v['link']?></b>
        </div>
         <?php endforeach ?><!--contact_t-->


<!--         <div class="contact_t">
          <img src="images/contect_mail.gif" />
          <b>DanBao@163.com</b>
        </div> --><!--contact_t-->


  <!--       <div class="contact_t">
          <img src="images/contect_wz.gif" />
          <span>北京市朝阳区建国路93号
万达广场8号楼1907室</span>
        </div> --><!--contact_t-->


         <div class="contact_map">
           <span>中鼎融德投资担保（北京）有限公司地址</span>
           <img src="images/contect_map.gif" width="366" height="302" />
        </div> --><!--contact_map


      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>

</body>
</html>
