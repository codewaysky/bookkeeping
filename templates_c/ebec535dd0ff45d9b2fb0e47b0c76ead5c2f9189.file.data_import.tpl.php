<?php /* Smarty version Smarty-3.1.13, created on 2013-01-29 15:25:55
         compiled from "templates_smarty\data_import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301065107af505de105-06021940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebec535dd0ff45d9b2fb0e47b0c76ead5c2f9189' => 
    array (
      0 => 'templates_smarty\\data_import.tpl',
      1 => 1359469522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301065107af505de105-06021940',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5107af50674576_51395017',
  'variables' => 
  array (
    'shop_name' => 0,
    'css_position' => 0,
    'contents' => 0,
    'address' => 0,
    'name' => 0,
    'state' => 0,
    'error_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107af50674576_51395017')) {function content_5107af50674576_51395017($_smarty_tpl) {?><html>
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
                            <?php if ($_smarty_tpl->tpl_vars['address']->value=="data.php"){?>
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
            <?php if ($_smarty_tpl->tpl_vars['state']->value=="upload"){?>
                <div class="hero-unit" align="center">
                    <h3>数据导入</h3>
                    <br />
                    <form action="data_import.php" method="post" enctype="multipart/form-data">
                        <div>
                            <!--<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />-->
                            <span class="btn btn-file">
                                请上传您的Excel文件：
                                <input type="file" name="xls" id="xls" />
                            </span>
                            <br /><br />
                            <button class="btn btn-large btn-primary" type="submit">上传</button>
                        </div>
                    </form>
                </div>
            <?php }elseif($_smarty_tpl->tpl_vars['state']->value=="error"){?>
                <div class="alert alert-error" align="center">
                    <p><?php echo $_smarty_tpl->tpl_vars['error_info']->value;?>
</p>
                    <p><a href="data_import.php">点击这里返回上传页面重新上传Excel电子表格文档。</a></p>
                </div>
            <?php }elseif($_smarty_tpl->tpl_vars['state']->value=="ok"){?>
                <div class="alert alert-success" align="center">
                    上传成功，正在导入数据……
                </div>
            <?php }?>
        </div>
    </body>
</html><?php }} ?>