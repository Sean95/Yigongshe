<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>会员手册-<?php echo (C("WEB_NAME")); ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="/Public/template/default/assets/i/favicon.png">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileImage" content="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="/Public/template/default/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/Public/template/default/assets/css/app.css">
</head>
<body>
  <header data-am-widget="header"
          class="am-header am-header-default">
      <div class="am-header-left am-header-nav">
          <a href="/" class="">

                <i class="am-header-icon am-icon-home"></i>
          </a>
      </div>

      <h1 class="am-header-title">
          <a href="" class="">
            会员手册
          </a>
      </h1>

      <div class="am-header-right am-header-nav">
          <a href="/User/Index/index" class="">
          <?php if((!isset($_SESSION['uid']) || $_SESSION['uid']=='')): ?><img src="/Public/template/default/assets/i/yigavatar.jpg" alt="" class="am-comment-avatar" style="width:35px;height:35px;margin-top:8px;margin-bottom:8px;">
          <?php else: ?>
          <img src="<?php echo ($comprofile["avatar"]); ?>" alt="" class="am-comment-avatar" style="width:35px;height:35px;margin-top:8px;margin-bottom:8px;"><?php endif; ?>
          </a>
      </div>
  </header>
  
    <div class="am-panel am-panel-default" style="margin-bottom:0px;">
    <div class="am-panel-bd"><textarea name="content" style="width:100%;height:440px;font-size:10pt;background-color:rgba(0,0,0,0);border-style:none;" disabled="disabled"><?php $m=M('setting');$usermanual=$m->where("id='1'")->find(); echo $usermanual['content']; ?></textarea></div>
</div>

<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li>
      <a href="/Home/Index/index">
        <span class="am-icon-server"></span>
        <span class="am-navbar-label">工社服务</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/video">
        <span class="am-icon-video-camera"></span>
        <span class="am-navbar-label">视频资料</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/teletext">
        <span class="am-icon-picture-o"></span>
        <span class="am-navbar-label">图文资料</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/usermanual">
        <span class="am-icon-book"></span>
        <span class="am-navbar-label">会员手册</span>
      </a>
    </li>
  </ul>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Public/template/default/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/template/default/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/Public/template/default/assets/js/amazeui.min.js"></script>
</body>
</html>