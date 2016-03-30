<?php
require_once("./API/qqConnectAPI.php");
$qc = new QC();
$code = $qc->qq_callback();
$openid = $qc->get_openid();
$qc = new QC($code,$openid);
$info = $qc->get_user_info();
echo '<script>location="http://www.project.com/index.php?r=data/index&info='.$info.'";</script>';
