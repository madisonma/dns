<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>用户登录</title>
<link  rel="stylesheet" type="text/css" href="__PUBLIC__/Css/base.css" />
</head>
<script lang="JavaScript">
    //回车提交表单
    document.onkeydown=function(event){
        var e = event || window.event || arguments.callee.caller.arguments[0];            
        if(e && e.keyCode==13){ // enter 键
             document.forms["loginfrm"].submit();
        }
    };
</script>
<body style="background-color:#63C8C2;">
        <div class="Frame">
            <form name="loginfrm" action="__URL__/check_login?action=login" method="post">
                <span class="user"><img  src="__PUBLIC__/Images/img_usr.png"/><input type="text" name="username" id="usertxt"  value="Username" onFocus="if (value =='Username'){value =''}" onBlur="if (value ==''){value='Username'}" /></span>
                <span class="passwd"><img  src="__PUBLIC__/Images/img_pwd.png"/><input type="password" name="password" id="passwdtxt" /></span>
                <span class="loginbtn"><input type="image" src="__PUBLIC__/Images/btn_signin.png"  onclick="this.form.submit()"/><a id="guest" href="__APP__/Guest/guest">Login As Guest</a></span>
                </form>
        </div>
</body>
</html>