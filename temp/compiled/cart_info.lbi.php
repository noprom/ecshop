<p><a class="shopborder track" href="flow.php" id="shoppingcar_link">购物车(<span car_product_total="shoppingCar_product_totalcount"><?php echo $this->_var['number']; ?></span>)件</a><s></s></p>
<div class="shopDropList"> 
  <?php if ($this->_var['cart_list']): ?>
  <div class="havepru">
    <div class="havepruTop"></div>
    <div class="havepruMid">
      <h2>最近加入的商品：</h2>
      <ul>
        <?php $_from = $this->_var['cart_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_83508300_1421118159');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_83508300_1421118159']):
?>
        
        <li>
          <div class="carListLeft"> <a href="<?php echo $this->_var['goods_0_83508300_1421118159']['url']; ?>"><img width="36" heigth="36" alt="<?php echo $this->_var['goods_0_83508300_1421118159']['name']; ?>" src="<?php echo $this->_var['goods_0_83508300_1421118159']['thumb']; ?>"></a></div>
          <div class="carListRight">
            <h3><a title="<?php echo $this->_var['goods_0_83508300_1421118159']['name']; ?>" href="<?php echo $this->_var['goods_0_83508300_1421118159']['url']; ?>"><?php echo $this->_var['goods_0_83508300_1421118159']['short_name']; ?></a></h3>
            <span class="blank0"></span>
            <div class="priceArea"> <strong>￥<?php echo $this->_var['goods_0_83508300_1421118159']['shop_price']; ?></strong><em>×<?php echo $this->_var['goods_0_83508300_1421118159']['goods_number']; ?></em> </div>
          </div>
          <div class="carListDelect"> <a style="cursor:pointer;" class="track" href="javascript:deleteCartGoods(<?php echo $this->_var['goods_0_83508300_1421118159']['rec_id']; ?>);">删除</a></div>
          <span class="blank0"></span></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <div class="ShopCarPageLine"></div>
      <div class="ShopCarPage">
        <div class="SCtotalpage">
          <div>共计<span>￥<?php echo $this->_var['amount']; ?></span></div>
          <strong><a rel="nofollow" href="flow.php" class="track">查看购物车(<span car_product_total="shoppingCar_product_totalcount"><?php echo $this->_var['number']; ?></span>件)</a></strong> <span class="blank0"></span> </div>
      </div>
    </div>
    <div class="havepruBom"></div>
  </div>
  <?php else: ?>
  <div class="shopnopru">
    <div class="SCtotalpageno">您的购物车中没有任何商品</div>
    <div class="SCtotalpageBottom"></div>
  </div>
  <?php endif; ?> </div>
