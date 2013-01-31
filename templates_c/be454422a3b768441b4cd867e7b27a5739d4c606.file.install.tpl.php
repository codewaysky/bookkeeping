<?php /* Smarty version Smarty-3.1.13, created on 2013-01-29 05:39:01
         compiled from "templates_smarty\install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10948510747456cec30-05500165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be454422a3b768441b4cd867e7b27a5739d4c606' => 
    array (
      0 => 'templates_smarty\\install.tpl',
      1 => 1359432077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10948510747456cec30-05500165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5107474575c909_96883060',
  'variables' => 
  array (
    'shop_name' => 0,
    'css_position' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107474575c909_96883060')) {function content_5107474575c909_96883060($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
记账系统 - 安装程序</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_position']->value;?>
">
    </head>
    
    <body>
        <div class="container">
            <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
记账系统 - 安装程序</h3>
            <?php if ($_smarty_tpl->tpl_vars['state']->value=="installed"){?>
                <div class="alert alert-success" align="center">
                    <a href="index.php">您已经安装过此程序，请点击这里回主页。</a>
                </div>
            <?php }elseif($_smarty_tpl->tpl_vars['state']->value=="not installed"){?>
                <form class="form-horizontal" method="post" action="install.php">
                    <fieldset>
                        <legend>填写安装信息</legend>
                        <div class="control-group">
                            <label class="control-label">数据库主机：</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="db_host" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">数据库用户名：</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="db_user" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">数据库密码：</label>
                            <div class="controls">
                                <input type="password" class="input-xlarge" name="db_password" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">数据库名：</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="db_database" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn">提交</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            <?php }elseif($_smarty_tpl->tpl_vars['state']->value=="database_connect_error"){?>
                <div class="alert alert-error" align="center">
                    连接数据库错误，请仔细检查刚才所填写的信息。
                </div>
            <?php }elseif($_smarty_tpl->tpl_vars['state']->value=="ok"){?>
                <div class="alert alert-success" align="center">
                    <a href="index.php">安装已经完成，请点击这里回主页。</a>
                </div>
            <?php }?>
        </div>
    </body>
</html><?php }} ?>