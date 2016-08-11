<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html>
<head>
<title>OA系统登录</title>
<meta charset="utf-8">
<!-- 基础CSS类库可随意更改 -->
<link rel="stylesheet" type="text/css" href="/mz2/OA/MzOA/Public/css/less.css">
<link rel="stylesheet" type="text/css" href="/mz2/OA/MzOA/Public/css/basic.css">

</head>
<body>
<div class="wrapper" style="background-color: white;">
  <div class="login-top">
  <div style="height: 60px;background-color: white;">
	<div style=";margin-left: 160px;">
		<img src="/mz2/OA/MzOA/Public/images/log_1.jpg" />	
	</div>
	<div style="float:right;margin-top: -34px;width: 360px;font-size: 12px;">
		
	</div>
  </div>
    <div class="login-topBg">
      <div class="login-topBg1">
        
        <div class="login-topStyle" >
          <form action="<?php echo U('login');?>" method="post">
          <!--在点击注册时出现样式login-topStyle3登录框，而login-topStyle2则消失-->
          <div class="login-topStyle3" id="loginStyle" style="margin-top: 75px;">
            <h3>用户平台登录</h3>
            <!--输入错误提示信息，默认是隐藏的，把display:none，变成block可看到-->
            <div class="error-information" style="display:none;">您输入的密码不正确，请重新输入</div>
            <div class="ui-form-item loginUsername">
              <input type="username" name="name" placeholder="用户名/手机号/密码">
            </div>
            <div class="ui-form-item loginPassword">
              <input type="password" name="pwd" placeholder="请输入密码">
            </div>
            <div class="login_reme">
              <input type="checkbox">
              <a class="reme1">记住账号</a> <a class="reme2" href="password.html">忘记密码?</a> </div>
              <span class="error_xinxi" style="display:none;">您输入的密码不正确，请重新输入</span> 
              <button type="submit" style="border:none;border-radius:10px;"><a class="btnStyle btn-register" style="margin:0px;"> 立即登录</a></button>
             </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <div class="loginCen" style="margin-top: 55px;">
    <div class="login-center">
      <div class="loginCenter-moudle">
        <div class="loginCenter-moudleLeft" style="margin-right: 60px;"> &nbsp;</div>
        <div class="loginCenter-moudleRight" style="  width: 1067px;"> 
          <!--第一个--> 
          <a class="loginCenter-mStyle loginCenter-moudle1" id="moudleRemove" style=" display:block;width: 340px;">
           <span class="moudle-img"><img src="/mz2/OA/MzOA/Public/images/login_bg_01.png"></span>
            <span class="moudle-text"> 
            <span class="moudle-text1" style="font-family:'微软雅黑'">一体化战略预算
</span> 
            <span class="moudle-text2" style="font-family:'微软雅黑'">Integrated strategic budget</span> 
            </span>
             </a> 
           <!--第二个--> 
          <a class="loginCenter-mStyle loginCenter-moudle2" style=" display:block; width: 357px;" id="moudleRemove2" > 
          <span class="moudle-img"><img src="/mz2/OA/MzOA/Public/images/login_bg_02.png"></span> 
           <span class="moudle-text">
            <span class="moudle-text1" style="font-family:'微软雅黑'"> 精细化财务核算 
</span>
            <span class="moudle-text2" style="font-family:'微软雅黑'">Refined financial accounting</span> 
           </span>
             </a> 
            <!--第三个--> 
                 <a class="loginCenter-mStyle loginCenter-moudle3" style=" display:block;" id="moudleRemove3" > 
                 <span class="moudle-img"><img src="/mz2/OA/MzOA/Public/images/login_bg_03.png"></span> 
                   <span class="moudle-text"> 
                 <span class="moudle-text"> <span class="moudle-text1" style="font-family:'微软雅黑'">独立化自主经营 
</span>
                  <span class="moudle-text2" style="font-family:'微软雅黑'">Independent operation</span>
            </span>
            </span>
                    </a> 
         
             </div>
      </div>
    </div>
  </div>
  <div class="footer"> <span class="footerText">Copyright ©  苏ICP备: 10227676号</span> </div>
</div>
</body>
</html>