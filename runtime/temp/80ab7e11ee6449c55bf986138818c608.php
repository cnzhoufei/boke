<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\wamp64\www\linfeicn\public/../App/admin\view\classification\index.html";i:1508827855;s:66:"D:\wamp64\www\linfeicn\public/../App/admin\view\common\header.html";i:1509777566;}*/ ?>
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
<div class="right">
	<div class="now" style="width: 1679px;">
		<a href="<?php echo url('Classification/index'); ?>" class="sel">分类列表（29）</a>
		<a href="<?php echo url('Classification/add'); ?>" id="fabu">添加分类</a>
		<div class="clear"></div>
	</div>
	<div class="right_main">
		<form method="post" id="form">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
		<tbody>
		<tr>
			<th class="bgtt" width="20"><input type="checkbox" name="checkall" onclick="pe_checkall(this, &#39;category_id&#39;)"></th>
			<th class="bgtt" width="50">ID号</th>
			<th class="bgtt" width="60">排序</th>
			<th class="bgtt">分类名称</th>
			<th class="bgtt" width="175">操作</th>
		</tr>
		<style type="text/css">.trclass td{background:#f5f1f1  !important;}</style>
		<?php foreach($data as $v): ?>
		<tr class="<?php if($v['layer'] == 1)echo 'trclass';?> tr<?php echo $v['id']; ?>">
			<td><input type="checkbox" value="<?php echo $v['id']; ?>"></td>
			<td><?php echo $v['id']; ?></td>
			<td><input type="text" data-id="<?php echo $v['id']; ?>" name="sorting" value="<?php echo $v['sorting']; ?>" class="inputtext input30 center"></td>
			<td class="aleft" ><a href="" target="_blank"><?php if($v['layer'] != 1){  echo str_repeat("　 ",$v['layer']);} ?><?php echo $v['name']; ?></a></td>
			<td>
				<a href="<?php echo url('change',array('id'=>$v['id'])); ?>" class="admin_edit mar3">修改</a>
				<a href="javascript:;" class="admin_del mar3" onclick="ondelete('<?php echo $v['id']; ?>')">删除</a>
				<a href="Transfer goods.html" class="admin_btn" onclick="return pe_dialog(this, &#39;批量转移商品&#39;, 400, 220)">转移商品</a>
			</td>
		</tr>
		<?php endforeach; ?>		
	</tbody>
	</table>
		</form>
	</div>
	<div class="right_bottom">
		<span class="fl mal10">
			<input type="checkbox" name="checkall" onclick="pe_checkall(this, &#39;category_id&#39;)">
			<button href="" onclick="return pe_cfall(this, &#39;category_id&#39;, &#39;form&#39;, &#39;批量删除&#39;)">批量删除</button>
			<button href="#" onclick="window.location.href='#'">更新排序</button>
		</span>
		<span class="fr fenye"></span>
		<div class="clear"></div>
	</div>
</div>
	<div class="clear"></div>
	<!--<div class="foot">Copyright <span class="num">©</span> 2008-2014 <a target="_blank" href="http://www.phpshe.com">灵宝简好网络科技有限公司</a> 版权所有</div>-->
</div>
<input type="hidden" name="token" value="<?php echo \think\Request::instance()->token(); ?>">
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
<script type="text/javascript">

$('input[name=sorting]').change(function(){
	var sorting = $(this).val();
	var id = $(this).attr('data-id');
	$.post("<?php echo url('sorting'); ?>",{id:id, sorting:sorting},function(res){
		layer.msg(res.msg);
	})
})


function ondelete(id)
{
	layer.confirm('你确定要删除吗？', {
	  btn: ['是的','算了'] //按钮
	}, function(){
		$.post("<?php echo url('delete'); ?>",{id:id ,'__token__':$('input[name=token]').val()},function(data){
			if(data.res == 1){
				$('.tr'+id).remove();
				$('input[name=token]').val(data.token)
			}
			layer.msg(data.msg)
		})
	}, function(){
		  layer.msg('好玩吗！！！');
	});
}
</script>
</body>
</html>