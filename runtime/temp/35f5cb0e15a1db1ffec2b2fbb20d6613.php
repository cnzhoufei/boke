<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\wamp64\www\linfeicn\public/../App/admin\view\article\add.html";i:1509697115;s:66:"D:\wamp64\www\linfeicn\public/../App/admin\view\common\header.html";i:1508829892;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台首页</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="shortcut icon" type="image/ico" href="favicon.ico">
<link type="text/css" rel="stylesheet" href="/static/admin/css/style.css">
<script type="text/javascript" src="/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/static/admin/js/global.js"></script> 
<script type="text/javascript" src="/static/admin/js/arttpl.js"></script>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="/static/layer/layer.js"></script>
</head>
<body style="overflow-y:hidden">
<div class="bgimg"></div>
<div class="pagetop">
	<div class="head">
		<div class="logo fl"><img style="height:37px;" src="/static/admin/images/logo.gif"></div>
		<div class="head_r fr">
			<a href="index.html" class="head_tb1" style="border-left:0"><s></s>概况</a>
			<a href="Local template.html" class="head_tb8"><s></s>模板</a>
			<a href="Guest.html" class="head_tb3"><s></s>统计</a>
			<a href="backups.html" class="head_tb5"><s></s>备份</a>
			<a href="cache.html" class="head_tb6"><s></s>缓存</a>
			<a href="" target="_blank" class="head_tb7"><s></s>首页</a>
			<a href="<?php echo url('Login/unLogin'); ?>" class="head_tb2" style="background:none"><s></s>退出</a>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="content">
	<div class="left" style="height: 894px;">
				<div class="fenlei">
			<h3 class="fl_tb1"><s></s>商品中心</h3>
			<ul>
								<li class=""><a href="<?php echo url('Article/index'); ?>"><span>├</span>文章列表</a></li>
								<li class=""><a href="<?php echo url('Classification/index'); ?>"><span>├</span>分类列表</a></li>
								<li class=""><a href="Brand management.html"><span>├</span>品牌管理</a></li>
								<li class=""><a href="Specification management.html"><span>├</span>规格管理</a></li>
								<li class=""><a href="A-Evaluation management.html"><span>├</span>评价管理</a></li>
								<li class=""><a href="Coupon-list.html"><span>├</span>优 惠 券</a></li>
								<li class=""><a href="Sales promotion-list.html"><span>├</span>促销活动</a></li>
							</ul>
			<div class="clear"></div>
			<div class="xian"></div>		</div>
				<div class="fenlei">
			<h3 class="fl_tb3"><s></s>交易中心</h3>
			<ul>
								<li class=""><a href="A-Order list.html"><span>├</span>订单列表</a></li>
								<li class=""><a href="Fund details.html"><span>├</span>资金明细</a></li>
								<li class=""><a href="Integration details.html"><span>├</span>积分明细</a></li>
								<li class=""><a href="Recharge record.html"><span>├</span>充值记录</a></li>
								<li class=""><a href="Waiting for settlement.html"><span>├</span>提现管理</a></li>
							</ul>
			<div class="clear"></div>
			<div class="xian"></div>		</div>
				<div class="fenlei">
			<h3 class="fl_tb4"><s></s>用户中心</h3>
			<ul>
								<li class=""><a href="Member list.html"><span>├</span>会员列表</a></li>
								<li class=""><a href="Management list.html"><span>├</span>管 理 员</a></li>
								<li class=""><a href="Administrative authority.html"><span>├</span>管理权限</a></li>
							</ul>
			<div class="clear"></div>
			<div class="xian"></div>		</div>
				<div class="fenlei">
			<h3 class="fl_tb2"><s></s>文章中心</h3>
			<ul>
								<li class=""><a href="Article classification-I.html"><span>├</span>文章分类</a></li>
								<li class=""><a href="Article list-I.html"><span>├</span>文章列表</a></li>
							</ul>
			<div class="clear"></div>
			<div class="xian"></div>		</div>
				<div class="fenlei">
			<h3 class="fl_tb6"><s></s>控制面板</h3>
			<ul>
								<li class=""><a href="Site settings.html"><span>├</span>网站设置</a></li>
								<li class=""><a href="WeChat settings.html"><span>├</span>微信设置</a></li>
								<li class=""><a href="Payment settings.html"><span>├</span>支付设置</a></li>
								<li class=""><a href="Navigation list.html"><span>├</span>导航管理</a></li>
								<li class=""><a href="thp top ad1.html"><span>├</span>广告管理</a></li>
								<li class=""><a href="link list.html"><span>├</span>友情链接</a></li>
								<li class=""><a href="Express template.html"><span>├</span>运单模板</a></li>
								<li class=""><a href="mess mail record.html"><span>├</span>短/邮记录</a></li>
							</ul>
			<div class="clear"></div>
					</div>
			</div>
<style type="text/css">.inputall{width:100%;}</style>
<div class="right" style="height: 571px;">
	<div class="now" style="width: 1679px;">
		<a href="javascript:;" class="sel">添加文章</a>
		<div class="clear"></div>
	</div>
	<div class="right_main">
		<form method="post">
		<?php echo token(); ?>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang mat20">
		<tbody>
		<tr>
			<td align="right" width="150">文章名称：</td>
			<td><input type="text" name="name" value="" class="inputall input500"></td>
		</tr>
		<tr>
			<td align="right" width="150">文章标题：</td>
			<td><input type="text" name="title" value="" class="inputall input500"></td>
		</tr>
		<tr>
			<td align="right" width="150">文章关键词：</td>
			<td><input type="text" name="keywords" value="" class="inputall input500"></td>
		</tr>
		<tr>
			<td align="right" width="150">文章外部链接：</td>
			<td><input type="text" name="external" value="" class="inputall input500"></td>
		</tr>
		<tr>
			<td align="right" width="150">文章命名：</td>
			<td><input type="text" name="url" value="" class="inputall input500"></td>
		</tr>
		<tr>
			<td align="right" class="c666">文章描述：</td>
			<td><textarea name="description" style="width:100%;height:100px;"></textarea> <span class="c888">（SEO选项）</span></td>
		</tr>
		<tr>
			<td align="right">文章分类：</td>
			<td>
				<select name="cid" class="inputselect" style="width:150px;">
				<?php foreach($classdata as $vv): ?>
					<option value="<?php echo $vv['id']; ?>"><?php echo str_repeat('——',$vv['layer']); ?><?php echo $vv['name']; ?></option>
				<?php endforeach; ?>			
				</select>
			</td>
		</tr>
		<!-- <tr>
			<td align="right">发布日期：</td>
			<td><input type="text" name="time" value=""  class="Wdate inputall"></td>
		</tr> -->
		<tr>
			<td align="right">文章缩略图：</td>
			<td><input type="file" name="img" value="" style="width:50%" class="Wdate inputall"></td>
		</tr>
		<tr>
			<td align="right">文章详情：</td>
			<td>
			<script id="editor" name="body" type="text/plain" style="width:100%;height:500px;"></script>
			</td>
		</tr>
		</tbody></table>
		<div class="mat10 mab10">
			<input type="submit" value="提 交" class="tjbtn" style="margin-left:435px">
		</div>
		</form>
	</div>
</div>
	<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/static/ueditor/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript" charset="utf-8">
var ue = UE.getEditor('editor');
</script>
	<div class="clear"></div>
	<!--<div class="foot">Copyright <span class="num">©</span> 2008-2014 <a target="_blank" href="http://www.phpshe.com">灵宝简好网络科技有限公司</a> 版权所有</div>-->
</div>
<script type="text/javascript">
function win_init() {
	$(".left").add(".right").css("height", $(window).height() - $(".pagetop").height());
	$(".now").css("width", $(".right_main").outerWidth());
	//$(".right_main").css("height", $(window).height() -  $(".pagetop").height() - $(".now:eq(0)").outerHeight() - $(".right_bottom").outerHeight() + 38);
}
$(function(){
	if ($(".right_bottom").height() == 0) {
		$(".right_bottom").remove();
	}
	win_init();
	$(window).resize(function() {
		win_init();
	});
	$(".list").find("td").hover(
		function(){
			if ($(this).hasClass("bgtt") || $(this).is("[nosel=1]")) return;
			$(this).parent("tr").children("td[nosel!=1]").css("background-color", "#fbfbfb");
		},
		function(){
			if ($(this).hasClass("bgtt") || $(this).is("[nosel=1]")) return;
			$(this).parent("tr").children("td[nosel!=1]").css("background-color", "#fff");
		}
	)
})
</script>

</body></html>