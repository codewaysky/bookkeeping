<?php /* Smarty version Smarty-3.1.13, created on 2013-01-29 10:02:48
         compiled from "templates_smarty\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1016751078d62835900-29726896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '407e19429fc14e444c4359933feb9544aa664ca7' => 
    array (
      0 => 'templates_smarty\\add.tpl',
      1 => 1359450165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016751078d62835900-29726896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51078d6290bfd0_90825119',
  'variables' => 
  array (
    'shop_name' => 0,
    'css_position' => 0,
    'contents' => 0,
    'address' => 0,
    'nowpage' => 0,
    'name' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51078d6290bfd0_90825119')) {function content_51078d6290bfd0_90825119($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
记账系统</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_position']->value;?>
">
        <script src="js/date.js"></script>
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
            <?php if ($_smarty_tpl->tpl_vars['state']->value=="error"){?>
                <div class="alert alert-error" align="center">
                    连接数据库错误。
                </div>
            <?php }elseif($_smarty_tpl->tpl_vars['state']->value=="add"){?>
                <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
" method="get">
                    <div class="control-group">
                        <div class="controls">
                            <h3>增加账目</h3>      
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">日期：</label>
                        <div class="controls">
                            <input type="text" name="date" onfocus="HS_setDate(this)" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">内容：</label>
                        <div class="controls">
                            <textarea rows="4" name="contents"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">规格：</label>
                        <div class="controls">
                            <input type="text" name="norms"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">数量：</label>
                        <div class="controls">
                            <input type="text" name="amount" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">面积：</label>
                        <div class="controls">
                            <input type="text" name="area" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">单价：</label>
                        <div class="controls">
                            <input type="text" name="unit_price" />
                        </div>
                    </div>    
                    <div class="control-group">
                        <div class="controls">                    
                            <button type="submit" class="btn btn-primary">提交</button>             
                        </div>
                    </div>
                </form>
            <?php }elseif($_smarty_tpl->tpl_vars['state']->value=="ok"){?>
                <div class="alert alert-success" align="center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
">该账目添加完成，请选择下一步操作。</a>
                    <br />
                    <br />
                    <a class="btn btn-primary" href="add_accounts.php">
                            继续添加账目
                    </a>
                    <a class="btn btn-primary" href="manage_accounts.php">
                            管理账目
                    </a>
                </div>
            <?php }?>
            </div>
        </body>
    </html><?php }} ?>