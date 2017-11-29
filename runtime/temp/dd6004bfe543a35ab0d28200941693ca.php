<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\wamp64\www\linfeicn\public/../App/admin\view\login\index.html";i:1510387651;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0056)http://phpshe.com/demo/phpshe/admin.php?mod=do&act=login -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>管理员登录</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="shortcut icon" type="image/ico" href="favicon.ico">
<link type="text/css" rel="stylesheet" href="/static/admin/css/style.css">
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- <script type="text/javascript" src="/static/admin/js/jquery.js"></script> -->
<script type="text/javascript" src="/static/admin/js/global.js"></script>
<style type="text/css">
body{background:#3C7DBE url(/static/admin/images/login_bg1.jpg) no-repeat center top; font-family:'Microsoft Yahei','Simsun',"宋体"}
.login_tt{font-size:24px; line-height:30px; color:#fff; width:462px; margin:0 auto; margin-top:150px; text-align:center}
.login{background:url(/static/admin/images/login_bg.png) no-repeat; width:462px; height:244px; margin:0 auto; margin-top:15px; padding-top:40px;}
.input1{margin:0px 0 0 65px; font-size:14px; color:#888;}
.input1 input{width:140px; height:28px; border:0; line-height:28px; margin-left:5px;}
.input2{margin:23px 0 0 65px; font-size:14px; color:#888;}
.input2 input{width:140px; height:28px; border:0; line-height:28px; margin-left:5px;}
.input3_box{background:#fff url(/static/admin/images/login_bg.png) no-repeat -36px -87px; border:1px #bbb solid; border-radius:5px; height:35px; line-height:32px;width:182px; padding-left:30px; color:#666; float:left;}
.input3{margin:20px 0 0 33px;}
.input3_box input{width:53px; height:28px; border:0; line-height:28px; margin-left:5px; margin-top:2px;}
.input3 img{margin-left:3px; width:80px; height:32px; border:0; float:left; display:inline; margin-top:2px;}
.login_btn{margin:25px 0 0 33px;}
.login_btn input{background:#0099CC; border-radius:4px; color:#fff; font-size:16px; font-family:'微软雅黑'; width:213px; height:40px; border:0; cursor:pointer;}
.copyright{text-align:center; color:#BECAD6;}
.copyright a,.copyright a:hover{color:#BECAD6;}
.login .input_name{float:left; margin-top:3px; display:block;}
</style>
</head>
<body>
<div class="login_tt"><span class="num">PHPSHE</span>商城管理系统</div>
<form method="post" id="form">
<div class="login">	
	<div class="input1"><span class="input_name">账 号:</span><input type="text" name="name"><div class="clear"></div></div>
	<div class="input2"><span class="input_name">密 码:</span><input type="password" name="passwd"><div class="clear"></div></div>
	<div class="input3">
		<div class="input3_box" style="position:relative;">
			<span class="fl">验证码:</span>
			<input class="fl" type="text" name="code">
			<div class="clear"></div>
			<img id="code" src="<?php echo url('code'); ?>" alt="验证码"  onclick="this.src='<?php echo url('code'); ?>?'+Math.random()" style="cursor:pointer; position:absolute; left:128px; top:0">
		</div>
		<div class="clear"></div>
	</div>
    <?php echo token(); ?>
	<div class="login_btn"><input type="button" id="submit" value="登 录"></div>
</div>
</form>

<script type="text/javascript" src="/static/layer/layer.js"></script>
<script type="text/javascript">
	$(document).ready(function (e) {
    $('#form').on('submit',(function(e) {
    	var name = $('input[name=name]').val();
    	var passwd = $('input[name=passwd]').val();
    	var code = $('input[name=code]').val();
    	if(!name){
    		layer.msg('用户名不能为空！');
    		return false;
    	}
    	if(!passwd){
    		layer.msg('密码不能为空！');
    		return false;
    	}
    	if(!code){
    		layer.msg('验证码不能为空！');
    		return false;
    	}
        var formData = new FormData(this);
        e.preventDefault();
        $.ajax({
            type:'POST',
            url: '',
            data:formData,
            // cache:false,
            contentType: false,
            processData: false,

            success:function(data){
            	console.log(data)
               if(data.res == 1){
					layer.msg(data.msg)
               		window.location.href="<?php echo url('Index/index'); ?>";
               }else{
               		if(data.res == 2){
               			$('#code').click();
               		}

                    $('input[name=__token__]').val(data.token);
               
					layer.msg(data.msg)
               }
            },
            error: function(data){
                layer.msg('网络错误！')
            }
        });
    }));

    $("#submit").on("click", function() {
        $("#form").submit();
    });


    $(document).keydown(function(event){ 
        if(event.keyCode == 13){
        	$("#form").submit();
        } 
     }); 
});
</script>
</body>
</html>