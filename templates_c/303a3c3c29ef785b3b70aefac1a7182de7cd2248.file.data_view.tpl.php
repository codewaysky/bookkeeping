<?php /* Smarty version Smarty-3.1.13, created on 2013-01-29 12:05:43
         compiled from "templates_smarty\data_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1424510796fd3efb33-89933387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '303a3c3c29ef785b3b70aefac1a7182de7cd2248' => 
    array (
      0 => 'templates_smarty\\data_view.tpl',
      1 => 1359457541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1424510796fd3efb33-89933387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_510796fd4c7f67_59920403',
  'variables' => 
  array (
    'shop_name' => 0,
    'css_position' => 0,
    'contents' => 0,
    'address' => 0,
    'nowpage' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510796fd4c7f67_59920403')) {function content_510796fd4c7f67_59920403($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
记账系统</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_position']->value;?>
">
        <style>
            ul {
                list-style-type: none;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">欢迎使用！</a>
                    <ul class="nav">
                        <li><a href="index.php">主页</a></li>
                        <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['address']->value==$_smarty_tpl->tpl_vars['nowpage']->value){?>
                                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <?php }else{ ?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="hero-unit" align="center">
                <ul >
                    <li><a class="btn btn-primary btn-large" href="data_import.php">导入Excel文件</a></li>
                    <br />
                    <li><a class="btn btn-primary btn-large" href="data_export.php">导出Excel文件</a></li>
                </ul>
            </div>
        </div>
    </body>
</html><?php }} ?>