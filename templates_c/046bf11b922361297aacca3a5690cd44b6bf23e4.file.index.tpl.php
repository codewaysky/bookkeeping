<?php /* Smarty version Smarty-3.1.13, created on 2013-01-30 17:44:35
         compiled from "templates_smarty/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6828445415108eb83014fb6-04428224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046bf11b922361297aacca3a5690cd44b6bf23e4' => 
    array (
      0 => 'templates_smarty/index.tpl',
      1 => 1359427765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6828445415108eb83014fb6-04428224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'css_position' => 0,
    'contents' => 0,
    'address' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5108eb830ba652_30955495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5108eb830ba652_30955495')) {function content_5108eb830ba652_30955495($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
记账系统</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_position']->value;?>
">
    </head>
    
    <body>
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">欢迎使用！</a>
                    <ul class="nav">
                        <li class="active"><a href="index.php">主页</a></li>
                        <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="hero-unit" align="center">
                <h1><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
记账系统</h1>
                <p>开始您的轻松生活~</p>
                <p>
                    <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
                        <a class="btn btn-primary btn-large" href="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                        </a>
                    <?php } ?>
                </p>
            </div>
        </div>
    </body>
</html><?php }} ?>