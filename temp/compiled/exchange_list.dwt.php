<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>


<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
  <?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix">
  
  <div class="AreaL">
    
  
    <?php echo $this->fetch('library/category_tree.lbi'); ?>
  
    <?php echo $this->fetch('library/history.lbi'); ?>
    

    
    
    
  </div>
  

  
  <div class="AreaR">
    
    <?php echo $this->fetch('library/exchange_hot.lbi'); ?>
    <?php echo $this->fetch('library/exchange_list.lbi'); ?>
    <?php echo $this->fetch('library/pages.lbi'); ?>
    
  </div>
  
</div>

<div class="blank10"></div>
<div id="footerArea"><?php echo $this->fetch('library/help.lbi'); ?> <span class="blank15"></span> <?php echo $this->fetch('library/page_footer.lbi'); ?> </div>
</body>
</html>
