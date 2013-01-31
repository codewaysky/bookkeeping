<?php /* Smarty version Smarty-3.1.13, created on 2013-01-30 17:43:57
         compiled from "templates_smarty/install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15138412235108eb5de07827-49157150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206136204fc57a4cc1e3622bec87af9eb6fec144' => 
    array (
      0 => 'templates_smarty/install.tpl',
      1 => 1359432077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15138412235108eb5de07827-49157150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'css_position' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5108eb5def4072_94886519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5108eb5def4072_94886519')) {function content_5108eb5def4072_94886519($_smarty_tpl) {?><html>
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