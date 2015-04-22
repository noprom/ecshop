<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:63:"E:/Web/wamp/www/ecshop/themes/ecmoban_jingdong/auction_list.dwt";i:1;s:70:"E:/Web/wamp/www/ecshop/themes/ecmoban_jingdong/library/page_header.lbi";i:2;s:66:"E:/Web/wamp/www/ecshop/themes/ecmoban_jingdong/library/ur_here.lbi";i:3;s:72:"E:/Web/wamp/www/ecshop/themes/ecmoban_jingdong/library/category_tree.lbi";i:4;s:66:"E:/Web/wamp/www/ecshop/themes/ecmoban_jingdong/library/history.lbi";i:5;s:64:"E:/Web/wamp/www/ecshop/themes/ecmoban_jingdong/library/pages.lbi";i:6;s:63:"E:/Web/wamp/www/ecshop/themes/ecmoban_jingdong/library/help.lbi";i:7;s:70:"E:/Web/wamp/www/ecshop/themes/ecmoban_jingdong/library/page_footer.lbi";}s:7:"expires";i:1421208211;s:8:"maketime";i:1421204611;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>拍卖活动_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_jingdong/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<link href="themes/ecmoban_moonbasa2013/qq/images/qq.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script> <div id="Head">
  <div id="headerTopArea" class="headerTopAreaBox">
    <div class="headerTopArea">
      <div class="headerTop">
        <div class="headerTopLeft">
          <div id="ECS_MEMBERZONE" class="loginArea">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
          <div class="recommendArea"><a class="track" href="user.php?act=order_list">我的订单</a><a href="javascript:bookmark();" id="vanclFavorite">收藏本站</a></div>
        </div>
        <div class="headerTopRight">
          <div id="vanclMap" ><a href="user.php" target="_blank">我的京东</a>
            
          </div>
          
           
                    <div id="vanclMap"><a href="flow.php" class="mapDropTitle track mapTitle" >查看购物车</a></div>
                    <div id="vanclMap"><a href="pick_out.php" class="mapDropTitle track mapTitle" >选购中心</a></div>
                    <div id="vanclMap"><a href="tag_cloud.php" class="mapDropTitle track mapTitle" >标签云</a></div>
                    <div id="vanclMap"><a href="quotation.php" class="mapDropTitle track mapTitle" >报价单</a></div>
           
                    
          
        </div>
      </div>
    </div>
  </div>
  <div class="LogoSearchBar" id="logoArea">
    <div class="logoSearchSubnavArea">
      <h1 class="logoArea"><a href="index.php" class="track"><img src="themes/ecmoban_jingdong/images/logo.gif" /></a></h1>
      <div class="searchAreaBlock">
        <div class="searchLeft">
          <ul id="searchBar" class="searchBar">
          </ul>
          <div class="searchInt">
            <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
              <input name="keywords" type="text" id="keyword" value="" class="searchText ac_input" />
              <input type="submit" value="搜索" name="imageField" class="searchBtn" style="cursor:pointer;">
            </form>
          </div>
           </div>
        <div class="menuTopRight">
          <div id="shoppingCarNone" class="active"> 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block"> 
<div class="menu">
  <a href="index.php">首页<span></span></a>
    <a href="category.php?id=3"  >
GSM手机 <span></span>
</a>
 
   <a href="category.php?id=5"  >
双模手机 <span></span>
</a>
 
   <a href="category.php?id=6"  >
手机配件 <span></span>
</a>
 
   <a href="group_buy.php"  >
团购商品 <span></span>
</a>
 
   <a href="activity.php"  >
优惠活动 <span></span>
</a>
 
   <a href="snatch.php"  >
夺宝奇兵 <span></span>
</a>
 
   <a href="auction.php"   class="cur">
拍卖活动 <span></span>
</a>
 
   <a href="exchange.php"  >
积分商城 <span></span>
</a>
 
   <a href="message.php"  >
留言板 <span></span>
</a>
 
   <a href="http://bbs.ecshop.com/" target="_blank"  >
EC论坛 <span></span>
</a>
 
 </div> 
</div>
</div>
<script type="text/javascript">
/*收藏夹功能*/
function bookmark() {
	var httpUrl="http://"+location.hostname;
    var c;
    var a = /^http{1}s{0,1}:\/\/([a-z0-9_\\-]+\.)+(yihaodian|1mall|111|yhd){1}\.(com|com\.cn){1}\?(.+)+$/;
    if (a.test(httpUrl)) {
        c = "&ref=favorite"
    } else {
        c = "?ref=favorite"
    }
    var d = httpUrl + c;
    if ('undefined' == typeof (document.body.style.maxHeight)) {
        d = httpUrl
    }
    try {
        if (document.all) {
            window.external.AddFavorite(d, favorite)
        } else {
            try {
                window.sidebar.addPanel(favorite, d, "")
            } catch(b) {
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
            }
        }
    } catch(b) {
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
    }
}
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}
/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#shoppingCarNone").html(res.content);
  }
}
</script> 
 
 
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="auction.php">拍卖活动</a> 
</div>
</div>
<div class="blank"></div><div class="block clearfix">
  
  <div class="AreaL">
    
  
    
  <div id="category_tree">
  <div class="tit">所有商品分类</div>
  <dl class="clearfix" >
   <div class="box1 cate" id="cate">
					<h1 onclick="tab(0)"  
		
		
		        style="border-top:none"
         
		 
		
		
		>
		
		 		
		<span class="f_l"><img src="themes/ecmoban_jingdong/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="category.php?id=1" class="  f_l">手机类型</a>
		</h1>
		<ul style="display:none" >
				 <a class="over_2" href="category.php?id=2">CDMA手机</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=3">GSM手机</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=4">3G手机</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=5">双模手机</a>  
		 
<div class="clearfix">
</div>   
				</ul>
		<div style="clear:both"></div>
					<h1 onclick="tab(1)"  
		
		
		 
		 
		
		
		>
		
		 		
		<span class="f_l"><img src="themes/ecmoban_jingdong/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="category.php?id=6" class="  f_l">手机配件</a>
		</h1>
		<ul style="display:none" >
				 <a class="over_2" href="category.php?id=7">充电器</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=8">耳机</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=9">电池</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=11">读卡器和内存卡</a>  
		 
<div class="clearfix">
</div>   
				</ul>
		<div style="clear:both"></div>
					<h1 onclick="tab(2)"  
		
		
		 
		 
		
		
		>
		
		 		
		<span class="f_l"><img src="themes/ecmoban_jingdong/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="category.php?id=12" class="  f_l">充值卡</a>
		</h1>
		<ul style="display:none" >
				 <a class="over_2" href="category.php?id=13">小灵通/固话充值卡</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=14">移动手机充值卡</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=15">联通手机充值卡</a>  
		 
<div class="clearfix">
</div>   
				</ul>
		<div style="clear:both"></div>
	 
</div>
<div style="clear:both"></div>  
</div>  
 
<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/ecmoban_jingdong/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/ecmoban_jingdong/images/btn_unfold.gif"
		}
}
</script>   
    
    
    
    
    <div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
	 
   
   <div class="box">
   <div class="box_1">
    <h3><span>拍卖商品</span></h3>
    <div class="boxCenterList">
             <span style="margin:2px 10px; font-size:14px; line-height:36px;">当前没有拍卖活动</span>
          </div>
   </div>
  </div>
  <div class="blank5"></div>
  
<form name="selectPageForm" action="/ecshop/auction.php" method="get">
<div id="pager">
  总计  个记录，共  页。 <span> <a href="">第一页</a> <a href="">上一页</a> <a href="">下一页</a> <a href="">最末页</a> </span>
        <select name="page" id="page" onchange="selectPage(this)">
        </select>
</div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>
  
</div>
<div class="blank10"></div>
<div id="footerArea"><div class="blank"></div>
<div class="w">
  <div id="service-2013"> 
     
        <dl class="fore1">
      <dt><b></b><strong>新手上路 </strong></dt>
      <dd> 
                <div><a href="article.php?id=9" target="_blank" title="售后流程">售后流程</a></div>
                <div><a href="article.php?id=10" target="_blank" title="购物流程">购物流程</a></div>
                <div><a href="article.php?id=11" target="_blank" title="订购方式">订购方式</a></div>
         
      </dd>
    </dl>
     
     
        <dl class="fore2">
      <dt><b></b><strong>手机常识 </strong></dt>
      <dd> 
                <div><a href="article.php?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></div>
                <div><a href="article.php?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></div>
                <div><a href="article.php?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></div>
         
      </dd>
    </dl>
     
     
        <dl class="fore3">
      <dt><b></b><strong>配送与支付 </strong></dt>
      <dd> 
                <div><a href="article.php?id=15" target="_blank" title="货到付款区域">货到付款区域</a></div>
                <div><a href="article.php?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></div>
                <div><a href="article.php?id=17" target="_blank" title="支付方式说明">支付方式说明</a></div>
         
      </dd>
    </dl>
     
     
        <dl class="fore4">
      <dt><b></b><strong>会员中心</strong></dt>
      <dd> 
                <div><a href="article.php?id=18" target="_blank" title="资金管理">资金管理</a></div>
                <div><a href="article.php?id=19" target="_blank" title="我的收藏">我的收藏</a></div>
                <div><a href="article.php?id=20" target="_blank" title="我的订单">我的订单</a></div>
         
      </dd>
    </dl>
     
     
        <dl class="fore5">
      <dt><b></b><strong>服务保证 </strong></dt>
      <dd> 
                <div><a href="article.php?id=21" target="_blank" title="退换货原则">退换货原则</a></div>
                <div><a href="article.php?id=22" target="_blank" title="售后服务保证 ">售后服务保证</a></div>
                <div><a href="article.php?id=23" target="_blank" title="产品质量保证 ">产品质量保证</a></div>
         
      </dd>
    </dl>
     
     
     
     
    
    <span class="clr"></span> </div>
</div>
  <span class="blank15"></span> <div class="w">
  <div id="footer-2013"> 
        <div class="links"> 
       
      <a href="article.php?id=1" >免责条款</a> 
       |  
       
      <a href="article.php?id=2" >隐私保护</a> 
       |  
       
      <a href="article.php?id=3" >咨询热点</a> 
       |  
       
      <a href="article.php?id=4" >联系我们</a> 
       |  
       
      <a href="article.php?id=5" >公司简介</a> 
       |  
       
      <a href="wholesale.php" >批发方案</a> 
       |  
       
      <a href="myship.php" >配送方式</a> 
       
       
    </div>
        
    <div class="copyright"> 
     &copy; 2005-2015 ECSHOP 版权所有，并保留所有权利。<br />
      
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <br />
      
       
      
    </div>
    <div align="center"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_jingdong/images/ecmoban.gif" alt="ECShop模板" /></a></div><br />
    
        
  </div>
</div>
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
 
  
  
  
  
  
                                                                                  
    
  
  
  
  
  
  
  
  
  
  
	         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script> </div>
</body>
</html>