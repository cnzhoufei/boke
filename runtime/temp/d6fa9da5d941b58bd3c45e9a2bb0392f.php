<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\wamp64\www\linfeicn\public/../App/admin\view\upload\uploadone.html";i:1509778107;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文件上传</title>
	<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
<form method="post" enctype="multipart/form-data" method="post">
	<div style="width:680px;height: 380px;line-height: 100%;">
		<div style="width:100%;height: 50px;">
			<div for="file" style="cursor:pointer;" onclick="upload()"><img style="width:50px;"  src="/static/admin/images/uploadlogo.png">
				<input id="file" type="file" onchange="check(this)" name="img" style="display:none;">
			</div>
			<input type="image" src="/static/admin/images/queding.png" style="width:50px;float:right;">
		</div>
		<div style="width:100%;height: 280px;margin-top: 5px;text-align: center;"><img style="max-height:280px;max-width: 100%;" id="img" src="/static/admin/images/upload.png"></div>
		<p style="color:#f00;"><?php echo (isset($error) && ($error !== '')?$error:''); ?></p>
	</div>
</form>
</body>
<script type="text/javascript">
function check(obj) 
{
	 $('#img').attr('src',window.URL.createObjectURL(obj.files[0]));
}
var path = '<?php echo (isset($path) && ($path !== '')?$path:''); ?>';
if(path){
	var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
	$('#images', window.parent.document).val(path);
	$('.images', window.parent.document).attr('src',path);
    parent.layer.close(index)
}

function upload()
{
	var file = document.getElementById("file"); 
	file.click();
}



</script>
</html>