<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
您好, <a style="color: rgb(51, 51, 51);" class="top track" href="user.php"><?php echo $this->_var['user_info']['username']; ?></a> <span style="color: #a10000"><a target="_parent" href="user.php?act=logout" style="color: #a10000" class="top track">退出登录</a></span>
<?php else: ?>
<?php echo $this->_var['lang']['welcome']; ?><span><a href="user.php" class="track">[&nbsp;登录&nbsp;</a>|<a href="user.php?act=register" class="track">&nbsp;免费注册&nbsp;]</a></span>
<?php endif; ?>