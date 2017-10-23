<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\wamp64\www\linfeicn\public/../App/admin\view\classification\add.html";i:1508734919;s:66:"D:\wamp64\www\linfeicn\public/../App/admin\view\common\header.html";i:1508744815;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
								<li class=""><a href="product-list.html"><span>├</span>商品列表</a></li>
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
<div class="right">
	<div class="now" style="width: 1696px;">
		<a href="javascript:;" class="sel">添加分类</a>
		<div class="clear"></div>
	</div>
	<div class="right_main">
		<form method="post">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang mat20 mab20">
		<tbody><tr>
			<td align="right" width="150" class="c666">分类名称：</td>
			<td><input type="text" name="name" value="" class="inputall input250"></td>
		</tr>
		<tr>
			<td align="right" class="c666">上级分类：</td>
			<td>
				<select name="pid" class="inputselect" style="width:262px">
				<option value="0">=============== 无 ==============</option>
								<?php foreach($list as $v): ?>
									<option value="<?php echo $v['id']; ?>"><?php if($v['layer'] != 1){  echo str_repeat("　 ",$v['layer']);echo '|-';} ?><?php echo $v['name']; ?></option>
								<?php endforeach; ?>
								</select>
			</td>
		</tr>
		<tr>
			<td align="right" class="c666">分类排序：</td>
			<td><input type="text" name="sorting" value="" class="inputall input80"></td>
		</tr>
		<tr>
			<td align="right" class="c666">分类命名：</td>
			<td><input type="text" name="url" value="" class="inputall input80"><input onclick="pinyi(this)" style="margin-left:10px;" value="pinyi" type="checkbox" />拼音</td>
		</tr>
		<tr>
			<td align="right" class="c666">跳转url：</td>
			<td><input type="text" name="external" value="" class="inputall input500"> <span class="c888">（跳转链接 不填写为本站链接）</span></td>
		</tr>
		<tr>
			<td align="right" class="c666">页面标题：</td>
			<td><input type="text" name="title" value="" class="inputall input500"> <span class="c888">（SEO选项）</span></td>
		</tr>
		<tr>
			<td align="right" class="c666">页面关键词：</td>
			<td><input type="text" name="keywords" value="" class="inputall input500"> <span class="c888">（SEO选项）</span></td>
		</tr>
		<tr>
			<td align="right" class="c666">页面描述：</td>
			<td><textarea name="description" style="width:500px;height:100px;"></textarea> <span class="c888">（SEO选项）</span></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<?php echo token(); ?>
				<input type="submit" name="pesubmit" value="提 交" class="tjbtn">
			</td>
		</tr>
		</tbody>
		</table>
		</form>
	</div>
</div>
</div>
</body>
<script type="text/javascript">
		function pinyi(obj)
		{
			var checked = $(obj).attr('checked');
			if(checked == 'checked'){
				$('input[name=url]').css('display','none');
			}else{
				$('input[name=url]').css('display','');
			}
		}
</script>
</html>