<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\wamp64\www\linfeicn\public/../App/admin\view\article\index.html";i:1509783964;s:66:"D:\wamp64\www\linfeicn\public/../App/admin\view\common\header.html";i:1509777566;}*/ ?>
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
<div class="right" style="height: 571px;">
	<div class="now" style="width: 1679px;">
		<a href="product-list.html" class="sel">商品列表（26）</a>
		<a href="Off shelf products.html">下架商品（0）</a>
		<a href="Goods out of stock.html">缺货商品（0）</a>
		<a href="Free shipping.html">包邮商品（26）</a>
		<a href="Recommended products.html">推荐商品（5）</a>
		<a href="<?php echo url('add'); ?>" style="float:right" id="fabu">添加商品</a>
		<div class="clear"></div>
	</div>
	<div class="right_main">
		<div class="search">
			<form method="get">
			<input type="hidden" name="mod" value="product">
			<input type="hidden" name="filter" value="">
			商品名称：<input type="text" name="name" value="" class="inputtext input200">
			<select name="category_id" class="selectmini">
			<option value="" href="?mod=product&amp;state=1">全部分类</option>
						<option value="49" href="?mod=product&amp;state=1&amp;category_id=49">时尚女装</option>
						<option value="51" href="?mod=product&amp;state=1&amp;category_id=51">　 ├ 连衣裙</option>
						<option value="52" href="?mod=product&amp;state=1&amp;category_id=52">　 ├ T恤</option>
						<option value="53" href="?mod=product&amp;state=1&amp;category_id=53">　 ├ 上装</option>
						<option value="54" href="?mod=product&amp;state=1&amp;category_id=54">　 ├ 下装</option>
						<option value="71" href="?mod=product&amp;state=1&amp;category_id=71">　 　　├ 尺寸</option>
						<option value="72" href="?mod=product&amp;state=1&amp;category_id=72">　 　　　　├ 超差</option>
						<option value="73" href="?mod=product&amp;state=1&amp;category_id=73">　 　　　　　　├ 123</option>
						<option value="74" href="?mod=product&amp;state=1&amp;category_id=74">　 　　　　　　　　├ 234</option>
						<option value="75" href="?mod=product&amp;state=1&amp;category_id=75">　 　　　　　　　　　　├ 345</option>
						<option value="76" href="?mod=product&amp;state=1&amp;category_id=76">　 　　　　　　　　　　　　├ 456</option>
						<option value="55" href="?mod=product&amp;state=1&amp;category_id=55">韩都衣舍</option>
						<option value="56" href="?mod=product&amp;state=1&amp;category_id=56">　 ├ 连衣裙</option>
						<option value="57" href="?mod=product&amp;state=1&amp;category_id=57">　 ├ 裤装</option>
						<option value="58" href="?mod=product&amp;state=1&amp;category_id=58">　 ├ T恤</option>
						<option value="59" href="?mod=product&amp;state=1&amp;category_id=59">　 ├ 衬衫/雪纺</option>
						<option value="60" href="?mod=product&amp;state=1&amp;category_id=60">天美意</option>
						<option value="63" href="?mod=product&amp;state=1&amp;category_id=63">　 ├ 专柜同款</option>
						<option value="61" href="?mod=product&amp;state=1&amp;category_id=61">　 ├ 清爽凉鞋</option>
						<option value="62" href="?mod=product&amp;state=1&amp;category_id=62">　 ├ 浅口单鞋</option>
						<option value="64" href="?mod=product&amp;state=1&amp;category_id=64">　 ├ 深口单鞋</option>
						</select>
			<select name="brand_id" class="selectmini">
			<option value="" href="?mod=product&amp;state=1">全部品牌</option>
						<option value="19" href="?mod=product&amp;state=1&amp;brand_id=19">[D] 多美滋</option>
						<option value="23" href="?mod=product&amp;state=1&amp;brand_id=23">[H] 韩都衣舍</option>
						<option value="13" href="?mod=product&amp;state=1&amp;brand_id=13">[K] 快点</option>
						<option value="18" href="?mod=product&amp;state=1&amp;brand_id=18">[L] 洛可可</option>
						<option value="2" href="?mod=product&amp;state=1&amp;brand_id=2">[O] 欧莱雅</option>
						<option value="3" href="?mod=product&amp;state=1&amp;brand_id=3">[O] 欧诗漫5555</option>
						<option value="14" href="?mod=product&amp;state=1&amp;brand_id=14">[S] 斯得雅</option>
						<option value="24" href="?mod=product&amp;state=1&amp;brand_id=24">[T] 天美意</option>
						<option value="15" href="?mod=product&amp;state=1&amp;brand_id=15">[T] 太子龙</option>
						<option value="16" href="?mod=product&amp;state=1&amp;brand_id=16">[U] uus</option>
						<option value="17" href="?mod=product&amp;state=1&amp;brand_id=17">[W] 完美</option>
						<option value="22" href="?mod=product&amp;state=1&amp;brand_id=22">[Y] 妖精的口袋</option>
						<option value="1" href="?mod=product&amp;state=1&amp;brand_id=1">[Z] 资生堂</option>
						</select>
			<select name="orderby" class="selectmini">
			<option value="" href="?mod=product&amp;state=1">默认排序</option>
						<option value="num|desc" href="?mod=product&amp;state=1&amp;orderby=num|desc">库存量(多到少)</option>
						<option value="num|asc" href="?mod=product&amp;state=1&amp;orderby=num|asc">库存量(少到多)</option>
						<option value="sellnum|desc" href="?mod=product&amp;state=1&amp;orderby=sellnum|desc">销售量(多到少)</option>
						<option value="sellnum|asc" href="?mod=product&amp;state=1&amp;orderby=sellnum|asc">销售量(少到多)</option>
						<option value="asknum|desc" href="?mod=product&amp;state=1&amp;orderby=asknum|desc">咨询数(多到少)</option>
						<option value="asknum|asc" href="?mod=product&amp;state=1&amp;orderby=asknum|asc">咨询数(少到多)</option>
						<option value="commentnum|desc" href="?mod=product&amp;state=1&amp;orderby=commentnum|desc">评价数(多到少)</option>
						<option value="commentnum|asc" href="?mod=product&amp;state=1&amp;orderby=commentnum|asc">评价数(少到多)</option>
						</select>
			<input type="submit" value="搜索" class="input_btn">
			</form>
		</div>
		<form method="post" id="form">
		<table border="0" cellspacing="0" cellpadding="0" class="list">
		<tbody>
		<tr>
			<th class="bgtt" width="20"><input type="checkbox" name="checkall" onclick="pe_checkall(this, &#39;product_id&#39;)"></th>
			<th class="bgtt" width="50">ID号</th>
			<th class="bgtt" width="50">排序</th>
			<th class="bgtt" colspan="2"></th>
			<th class="bgtt" width="90">商品分类</th>
			<th class="bgtt" width="90">品牌名称</th>
			<th class="bgtt" width="60">单价</th>
			<th class="bgtt" width="50">库存</th>
			<!--<th class="bgtt" width="50">浏览</td>-->
			<th class="bgtt" width="50">上架</th>
			<th class="bgtt" width="80">销量/评价</th>
			<th class="bgtt" width="100">操作</th>
		</tr>
		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		<tr>
			<td style="background-color: rgb(255, 255, 255);"><input type="checkbox" name="product_id[]" value="38"></td>
			<td style="background-color: rgb(255, 255, 255);"><?php echo $v['id']; ?></td>
			<td style="background-color: rgb(255, 255, 255);"><input type="text" name="product_order[38]" value="0" class="inputtext input30 center"></td>
			<td width="40" style="background-color: rgb(255, 255, 255);"><a href="" target="_blank"><img src="images/thumb_100x100_20170503141520x.jpg" width="40" height="40" class="imgbg"></a></td>
			<td class="aleft" style="padding-left: 0px; background-color: rgb(255, 255, 255);"><a href="http://phpshe.com/demo/phpshe/product/38" target="_blank" class="cblue"><?php echo $v['name']; ?></a></td>
			<td style="background-color: rgb(255, 255, 255);">T恤</td>
			<td style="background-color: rgb(255, 255, 255);">韩都衣舍</td>
			<td style="background-color: rgb(255, 255, 255);"><span class="num corg">30.0</span></td>
			<td class="num" style="background-color: rgb(255, 255, 255);"><span>109</span></td>
			<!--<td class="num">730</td>-->
			<td style="background-color: rgb(255, 255, 255);">
								<a href="http://phpshe.com/demo/phpshe/admin.php?mod=product&amp;act=state&amp;state=2&amp;id=38&amp;token=185dbf0e05b36cd40737acb79e73f95c"><img src="images/dui.png"></a>
							</td>
			<td style="background-color: rgb(255, 255, 255);">
				<a href="http://phpshe.com/demo/phpshe/admin.php?mod=product&amp;act=sell&amp;id=38&amp;fromto=http%3A%2F%2Fphpshe.com%2Fdemo%2Fphpshe%2Fadmin.php%3Fmod%3Dproduct%26state%3D1" onclick="return pe_dialog(this, &#39;设置销量&#39;, 400, 210, &#39;product_sell&#39;)">0</a>
				<span class="c999">/</span>
				<a href="http://phpshe.com/demo/phpshe/admin.php?mod=product&amp;act=comment&amp;id=38" onclick="return pe_dialog(this, &#39;添加评价&#39;, 600, 370, &#39;product_comment&#39;)">0</a>
			</td>
			<td style="background-color: rgb(255, 255, 255);">
				<a href="Modify goods.html" class="admin_edit mar3">修改</a>   
				<a href="http://phpshe.com/demo/phpshe/admin.php?mod=product&amp;act=del&amp;id=38&amp;token=185dbf0e05b36cd40737acb79e73f95c" class="admin_del" onclick="return pe_cfone(this, &#39;删除&#39;)">删除</a>
			</td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
				
	</tbody>
	</table>
		</form>
	</div>
	<div class="right_bottom">
		<span class="fl mal10">
			<input type="checkbox" name="checkall" onclick="pe_checkall(this, &#39;product_id&#39;)">
			<button href="admin.php?mod=product&amp;act=del&amp;token=185dbf0e05b36cd40737acb79e73f95c" onclick="return pe_cfall(this, &#39;product_id&#39;, &#39;form&#39;, &#39;批量删除&#39;)">批量删除</button>
			<button href="admin.php?mod=product&amp;act=order&amp;token=185dbf0e05b36cd40737acb79e73f95c" onclick="pe_doall(this,&#39;form&#39;)">更新排序</button>
			<button href="admin.php?mod=product&amp;act=state&amp;state=1&amp;token=185dbf0e05b36cd40737acb79e73f95c" onclick="return pe_cfall(this, &#39;product_id&#39;, &#39;form&#39;, &#39;批量上架&#39;)">批量上架</button>
			<button href="admin.php?mod=product&amp;act=state&amp;state=2&amp;token=185dbf0e05b36cd40737acb79e73f95c" onclick="return pe_cfall(this, &#39;product_id&#39;, &#39;form&#39;, &#39;批量下架&#39;)">批量下架</button>
			<button href="admin.php?mod=product&amp;act=tuijian&amp;tuijian=1&amp;token=185dbf0e05b36cd40737acb79e73f95c" onclick="return pe_cfall(this, &#39;product_id&#39;, &#39;form&#39;, &#39;批量推荐&#39;)">批量推荐</button>
			<button href="admin.php?mod=product&amp;act=tuijian&amp;tuijian=0&amp;token=185dbf0e05b36cd40737acb79e73f95c" onclick="return pe_cfall(this, &#39;product_id&#39;, &#39;form&#39;, &#39;取消推荐&#39;)">取消推荐</button>
			<button type="button" onclick="product_move()">批量转移商品</button>
		</span>
		<span class="fr fenye"><a href="http://phpshe.com/demo/phpshe/admin.php?mod=product&amp;state=1&amp;page=1">首页</a><a href="http://phpshe.com/demo/phpshe/admin.php?mod=product&amp;state=1&amp;page=1" class="sel">1</a><a href="http://phpshe.com/demo/phpshe/admin.php?mod=product&amp;state=1&amp;page=2">2</a><a href="http://phpshe.com/demo/phpshe/admin.php?mod=product&amp;state=1&amp;page=2">末页</a><style type="text/css">
.fenye{text-align:right;}
.fenye a{border:1px #ccc solid; padding:0 10px; border-radius:2px; color:#666; background:#fff;display:inline-block;  height:24px; line-height:24px; font-weight:normal; margin-left:3px;}
.fenye a:hover,.fenye .sel{background:#1DABDF; color:#fff; border:1px #0D95C7 solid;  padding:0 10px;}
.fenye .sel{ font-weight:bold;}
</style></span>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">
function product_move() {
	var product_id = new Array();
	if ($("input[name='product_id[]']").filter(":checked").length == 0) {
		alert('请先勾选需要转移的商品!');
		return false;
	}
	$("input[name='product_id[]']").filter(":checked").each(function(i){
		product_id[i] = $(this).val();
	})
	product_id = product_id.join(',');
	var layer_index = layer.open({
		type: 2,
		title: '批量转移商品',
		area: ['400px', '220px'],
		fixed: false, //不固定
		shadeClose: true,
		shade: 0.5,
		content: "http://phpshe.com/demo/phpshe/admin.php?mod=product&act=move&id="+product_id //iframe的url
	});
}
$(function(){
	$("select").change(function(){
		window.location.href = 'admin.php' + $(this).find("option:selected").attr("href");
	})
})
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
pe_loadscript("http://phpshe.com/demo/phpshe/index.php?mod=notice");
</script>

</body></html>