<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>积分调整-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/admin/css/sm.css">
    <link rel="stylesheet" href="/Public/template/admin/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/admin/css/main-admin.css">

  </head>
  <body>
    <div class="content-box no-top">
    <div class="main-con">
  <div class="integral-p con-pd-l con-mb bor-b2">
  <div class="search-box2">
  <form method="post" action="">
    <div class="row no-gutter">
    <div class="col-66"><input name="mobile" type="text" placeholder="输入手机号" value="<?php echo ($profilemobile); ?>" class="input-text"></div>
    <div class="col-33"><input name="submit" type="submit" value=" " class="btn-search"><span class="name"><?php echo ($profilename); ?></span></div>
    </div>
   
  </form>
   </div>
  </div>
  <form method="post" action="/Admin/Index/dointegral">
  <div class="tag-p con-color con-font con-pd-l con-mb bor-b2">
    <input type="hidden" name="uid" value="<?php echo ($profile["uid"]); ?>">
    <div class="row no-gutter">
    <div class="col-25">调整缘由</div>
    <div class="col-75">
    <select name="reason" style="color:red;">
        <option value="资金">资金</option>
        <option value="义务">义务</option>
        <option value="咨询">咨询</option>
        <option value="纠错">纠错</option>
        <option value="其他">其他</option>
    </select></div>
    </div>
  </div>
  <div class="num-p con-color con-font con-pd-l con-mb bor-b2">
    <div class="row no-gutter">
    <div class="col-25">调整数值</div>
    <div class="col-20">
    <select name="tid" style="color:red;">
        <option value="0">加(+)</option>
        <option value="1">减(-)</option>
    </select>
    </div>
    <div class="col-50"><input name="score" type="text" placeholder="100" class="input-text"></div>
    </div>
  </div>
  
  <div class="intergral-action con-pd"><input type="submit" value="确 定" class="btn-intergral"></div>
  </div>
  </form>
  
  
</div>
    
    <nav class="bar bar-tab">
    <a class="tab-item external" href="/Admin">
      <span class="tab-label">返回导航</span>
    </a>
    </nav>

          
          
<script src="/Public/template/admin/js/zepto.min.js"></script>
<script src="/Public/template/admin/js/sm.js"></script>
<script src="/Public/template/admin/js/sm-extend.js"></script>
  </body>
</html>