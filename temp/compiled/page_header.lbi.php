<link href="themes/ecmoban_moonbasa2013/qq/images/qq.css" rel="stylesheet" type="text/css"/>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
<div id="Head">
    <div id="headerTopArea" class="headerTopAreaBox">
        <div class="headerTopArea">
            <div class="headerTop">
                <div class="headerTopLeft">
                    <div id="ECS_MEMBERZONE" class="loginArea">
                        <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                    </div>
                    <div class="recommendArea"><a class="track" href="user.php?act=order_list">我的订单</a><a
                            href="javascript:bookmark();" id="vanclFavorite">收藏本站</a></div>
                </div>
                <div class="headerTopRight">
                    <div id="vanclMap"><a href="user.php" target="_blank">我的京东</a>

                    </div>

                    <?php if ($this->_var['navigator_list']['top']): ?>
                    <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
                    <div id="vanclMap"><a href="<?php echo $this->_var['nav']['url']; ?>" class="mapDropTitle track mapTitle"
                        <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <div class="LogoSearchBar" id="logoArea">
        <div class="logoSearchSubnavArea">
            <h1 class="logoArea"><a href="index.php" class="track"><img src="themes/ecmoban_jingdong/images/logo.gif"/></a></h1>

            <div class="searchAreaBlock">
                <div class="searchLeft">
                    <ul id="searchBar" class="searchBar">
                    </ul>
                    <div class="searchInt">
                        <form id="searchForm" name="searchForm" method="get" action="search.php"
                              onSubmit="return checkSearchForm()">
                            <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"
                                   class="searchText ac_input"/>
                            <input type="submit" value="搜索" name="imageField" class="searchBtn" style="cursor:pointer;">
                        </form>
                    </div>
                    <?php if ($this->_var['searchkeywords']): ?>
                    <div class="searchWordsBox">
                        <div class="searchWords"> <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <a
                                href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" class="track"><?php echo $this->_var['val']; ?></a> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="menuTopRight">
                    <div id="shoppingCarNone" class="active"> <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
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
            <a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?><span></span></a>
            <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>>
            <?php echo $this->_var['nav']['name']; ?>
            <span></span>
            </a>

            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    /*收藏夹功能*/
    function bookmark() {
        var httpUrl = "http://" + location.hostname;
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
                } catch (b) {
                    alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
                }
            }
        } catch (b) {
            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
        }
    }


    function deleteCartGoods(rec_id) {
        Ajax.call('delete_cart_goods.php', 'id=' + rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
    }

    /**
     * 接收返回的信息
     */
    function deleteCartGoodsResponse(res) {
        if (res.error) {
            alert(res.err_msg);
        }
        else {
            $("#shoppingCarNone").html(res.content);
        }
    }
</script> 
 

 


