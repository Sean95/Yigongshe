<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>智慧支持（申请）-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/css/sm.css">
    <link rel="stylesheet" href="/Public/template/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/css/main.css">
    <link rel="stylesheet" href="/Public/template/css/select.css">
  </head>
  <body>
    <div class="content-box no-top">
       <div class="main-con">
        <form name="form1" class="form-box" method="POST" action="/User/Index/dointelapply">
            <input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
       <div class="con-font con-pd bgcolor-w con-mb">
           <div class="row">
            <label style="float:left;line-height:25px;">义务领域</label>
            <div class="styled-selectone" style="float:left;width:83px;">
                  <select id="obligation" name="oid" onchange="abc(this.options[this.options.selectedIndex].id)">
                      <option value="">义务分类</option>
                      <?php if(is_array($obligation_typew)): $i = 0; $__LIST__ = $obligation_typew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obligation_typew): $mod = ($i % 2 );++$i;?><option value="<?php echo ($obligation_typew["id"]); ?>" id="<?php echo ($obligation_typew["content"]); ?>"><?php echo ($obligation_typew["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>
              </div>
           </div>
        </div>
        <script>
        function abc(s){
            ocontent.value=s;
            oid.value=s;
            document.all.oid.options[0].selected=true;
        }
        </script>
        <div class="con-font con-pd bgcolor-w con-mb">
              <div class="row">
              <textarea id="ocontent" name="ocontent" class="textarea-unit" disabled="disabled"></textarea>
              </div>
        </div>
        <div class="con-font con-pd bgcolor-w con-mb">
           <div class="row">
            <label style="float:left;line-height:25px;">咨询领域</label>
            <div class="styled-selectone" style="float:left;width:83px;">
                  <select id="consultation" name="cid" onchange="bao(this.options[this.options.selectedIndex].id)">
                      <option value="">咨询分类</option>
                      <?php if(is_array($consultation_typew)): $i = 0; $__LIST__ = $consultation_typew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consultation_typew): $mod = ($i % 2 );++$i;?><option value="<?php echo ($consultation_typew["id"]); ?>" id="<?php echo ($consultation_typew["content"]); ?>"><?php echo ($consultation_typew["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>
              </div>
              </div>
        </div>
        <script>
        function bao(s){
            ccontent.value=s;
            cid.value=s;
            document.all.cid.options[0].selected=true;
        }
        </script>
        <div class="con-font con-pd bgcolor-w con-mb">
              <div class="row">
              <textarea id="ccontent" name="ccontent" class="textarea-unit" disabled="disabled"></textarea>
              </div>
              
        </div>
  <div class="con-font con-pd bgcolor-w con-mb">
           <h3 class="con-tit"><span>自我介绍</span></h3>
           <hr size="1" noshade="noshade" style="border:1px #cccccc dotted"/>
              <div class="row">
              <textarea name="content" class="textarea-unit" placeholder=""></textarea>
              </div>
              
        </div>
  
  
  <div class="con-font con-pd bgcolor-w con-mb">
           <h3 class="con-tit"><span>义务日期</span></h3>
           <hr size="1" noshade="noshade" style="border:1px #cccccc dotted"/>
           <div class="row">
           <style>
.checkboxFour {
   background: #FFFFFF;
   float:left;
   text-align:center;
}

.checkboxFour input[type=checkbox]:checked + label {
	width:20px;
    height:20px;
	color: red;
	float:left;
	text-align:center;
}
</style>
  	  	<div class="checkboxFour">
		<input type="checkbox" id="checkboxFourInput1" value="one" name="one" style="display:none;float:left;" <?php $isIn=in_array("one",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput1" style="text-align:center;float:left;width:20px;height:20px;">1</label>
		<input type="checkbox" id="checkboxFourInput2" value="two" name="two" style="display:none;float:left;" <?php $isIn=in_array("two",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput2" style="text-align:center;float:left;width:20px;height:20px;">2</label>
		<input type="checkbox" id="checkboxFourInput3" value="three" name="three" style="display:none;float:left;" <?php $isIn=in_array("three",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput3" style="text-align:center;float:left;width:20px;height:20px;">3</label>
		<input type="checkbox" id="checkboxFourInput4" value="four" name="four" style="display:none;float:left;" <?php $isIn=in_array("four",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput4" style="text-align:center;float:left;width:20px;height:20px;">4</label>
		<input type="checkbox" id="checkboxFourInput5" value="five" name="five" style="display:none;float:left;" <?php $isIn=in_array("five",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput5" style="text-align:center;float:left;width:20px;height:20px;">5</label>
		<input type="checkbox" id="checkboxFourInput6" value="six" name="six" style="display:none;float:left;" <?php $isIn=in_array("six",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput6" style="text-align:center;float:left;width:20px;height:20px;">6</label>
		<input type="checkbox" id="checkboxFourInput7" value="seven" name="seven" style="display:none;float:left;" <?php $isIn=in_array("seven",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput7" style="text-align:center;float:left;width:20px;height:20px;">7</label>
		<input type="checkbox" id="checkboxFourInput8" value="eight" name="eight" style="display:none;float:left;" <?php $isIn=in_array("eight",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput8" style="text-align:center;float:left;width:20px;height:20px;">8</label>
		<input type="checkbox" id="checkboxFourInput9" value="nine" name="nine" style="display:none;float:left;" <?php $isIn=in_array("nine",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput9" style="text-align:center;float:left;width:20px;height:20px;">9</label>
		<input type="checkbox" id="checkboxFourInput10" value="ten" name="ten" style="display:none;float:left;" <?php $isIn=in_array("ten",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput10" style="text-align:center;float:left;width:20px;height:20px;">10</label>
		<input type="checkbox" id="checkboxFourInput11" value="eleven" name="eleven" style="display:none;float:left;" <?php $isIn=in_array("eleven",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput11" style="text-align:center;float:left;width:20px;height:20px;">11</label>
		<input type="checkbox" id="checkboxFourInput12" value="twelve" name="twelve" style="display:none;float:left;" <?php $isIn=in_array("twelve",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput12" style="text-align:center;float:left;width:20px;height:20px;">12</label>
		<input type="checkbox" id="checkboxFourInput13" value="thirteen" name="thirteen" style="display:none;float:left;" <?php $isIn=in_array("thirteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput13" style="text-align:center;float:left;width:20px;height:20px;">13</label>
		<input type="checkbox" id="checkboxFourInput14" value="fourteen" name="fourteen" style="display:none;float:left;" <?php $isIn=in_array("fourteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput14" style="text-align:center;float:left;width:20px;height:20px;">14</label>
		<input type="checkbox" id="checkboxFourInput15" value="fifteen" name="fifteen" style="display:none;float:left;" <?php $isIn=in_array("fifteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput15" style="text-align:center;float:left;width:20px;height:20px;">15</label>
		<input type="checkbox" id="checkboxFourInput16" value="sixteen" name="sixteen" style="display:none;float:left;" <?php $isIn=in_array("sixteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput16" style="text-align:center;float:left;width:20px;height:20px;">16</label>
		<input type="checkbox" id="checkboxFourInput17" value="seventeen" name="seventeen" style="display:none;float:left;" <?php $isIn=in_array("seventeen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput17" style="text-align:center;float:left;width:20px;height:20px;">17</label>
		<input type="checkbox" id="checkboxFourInput18" value="eighteen" name="eighteen" style="display:none;float:left;" <?php $isIn=in_array("eighteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput18" style="text-align:center;float:left;width:20px;height:20px;">18</label>
		<input type="checkbox" id="checkboxFourInput19" value="nineteen" name="nineteen" style="display:none;float:left;" <?php $isIn=in_array("nineteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput19" style="text-align:center;float:left;width:20px;height:20px;">19</label>
		<input type="checkbox" id="checkboxFourInput20" value="twenty" name="twenty" style="display:none;float:left;" <?php $isIn=in_array("twenty",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput20" style="text-align:center;float:left;width:20px;height:20px;">20</label>
		<input type="checkbox" id="checkboxFourInput21" value="twentyone" name="twentyone" style="display:none;float:left;" <?php $isIn=in_array("twentyone",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput21" style="text-align:center;float:left;width:20px;height:20px;">21</label>
		<input type="checkbox" id="checkboxFourInput22" value="twentytwo" name="twentytwo" style="display:none;float:left;" <?php $isIn=in_array("twentytwo",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput22" style="text-align:center;float:left;width:20px;height:20px;">22</label>
		<input type="checkbox" id="checkboxFourInput23" value="twentythree" name="twentythree" style="display:none;float:left;" <?php $isIn=in_array("twentythree",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput23" style="text-align:center;float:left;width:20px;height:20px;">23</label>
		<input type="checkbox" id="checkboxFourInput24" value="twentyfour" name="twentyfour" style="display:none;float:left;" <?php $isIn=in_array("twentyfour",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput24" style="text-align:center;float:left;width:20px;height:20px;">24</label>
		<input type="checkbox" id="checkboxFourInput25" value="twentyfive" name="twentyfive" style="display:none;float:left;" <?php $isIn=in_array("twentyfive",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput25" style="text-align:center;float:left;width:20px;height:20px;">25</label>
		<input type="checkbox" id="checkboxFourInput26" value="twentysix" name="twentysix" style="display:none;float:left;" <?php $isIn=in_array("twentysix",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput26" style="text-align:center;float:left;width:20px;height:20px;">26</label>
		<input type="checkbox" id="checkboxFourInput27" value="twentyseven" name="twentyseven" style="display:none;float:left;" <?php $isIn=in_array("twentyseven",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput27" style="text-align:center;float:left;width:20px;height:20px;">27</label>
		<input type="checkbox" id="checkboxFourInput28" value="twentyeight" name="twentyeight" style="display:none;float:left;" <?php $isIn=in_array("twentyeight",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput28" style="text-align:center;float:left;width:20px;height:20px;">28</label>
		<input type="checkbox" id="checkboxFourInput29" value="twentynine" name="twentynine" style="display:none;float:left;" <?php $isIn=in_array("twentynine",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput29" style="text-align:center;float:left;width:20px;height:20px;">29</label>
		<input type="checkbox" id="checkboxFourInput30" value="thirty" name="thirty" style="display:none;float:left;" <?php $isIn=in_array("thirty",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput30" style="text-align:center;float:left;width:20px;height:20px;">30</label>
		<input type="checkbox" id="checkboxFourInput31" value="thirtyone" name="thirtyone" style="display:none;float:left;" <?php $isIn=in_array("thirtyone",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput31" style="text-align:center;float:left;width:20px;height:20px;">31</label>
  	</div>

           </div>
             
        </div>
        <div class="row text-center">
              <input type="submit" class="btn-submit wp60" value="提交" style="font-size:10pt;">
       </div>
             
        </div>
        </form>
        <!--<div class="con-font con-pd text-center color-gray bgcolor-w con-mb2">
          联系电话：<a href="tel:<?php echo (C("WEB_TELEPHONE")); ?>" style="color:#000000"><?php echo (C("WEB_TELEPHONE")); ?></a>  技术支持：<a href="http://www.singka.cn" style="color:#000000">晟嘉网络</a>
       </div>-->
       </div>
       
    </div>
    
    <nav class="bar bar-tab">
    <a class="tab-item external" href="/">
      <span class="tab-label">综合信息</span>
    </a>
    <a class="tab-item external active" href="/User/Index/support">
      <span class="tab-label">提供支持</span>
    </a>
    <a class="tab-item external" href="/User/Index/index">
      <span class="tab-label">我的信息</span>
    </a>
   
  </nav>

          
          
<script src="/Public/template/js/zepto.min.js"></script>
<script src="/Public/template/js/sm.js"></script>
<script src="/Public/template/js/sm-extend.js"></script>
  </body>
</html>