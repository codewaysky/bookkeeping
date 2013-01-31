<?php /* Smarty version Smarty-3.1.13, created on 2013-01-30 20:52:52
         compiled from "templates_smarty/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1418571825108eb85156343-04257297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1f3cfd365b53baef13c910c47674400aa86804' => 
    array (
      0 => 'templates_smarty/manage.tpl',
      1 => 1359550371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1418571825108eb85156343-04257297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5108eb85259d35_12262946',
  'variables' => 
  array (
    'shop_name' => 0,
    'css_position' => 0,
    'contents' => 0,
    'address' => 0,
    'nowpage' => 0,
    'name' => 0,
    'state' => 0,
    'accounts' => 0,
    'element' => 0,
    'con' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5108eb85259d35_12262946')) {function content_5108eb85259d35_12262946($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
记账系统</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_position']->value;?>
">
        <style>
            .thclass {
                width: 100px;
                word-wrap:break-word;
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
            <?php if ($_smarty_tpl->tpl_vars['state']->value=="error"){?>
                <div class="alert alert-error" align="center">
                    连接数据库错误。
                </div>
            <?php }?>
            <form action="manage_accounts.php" method="get" id="chart">
                <!--<button class="btn btn-danger" type="button">删除选中账目</button>-->
                <!--<br /><br />-->
                <div class="alert alert-success">
                    请注意：编号为账目在数据库中的唯一标记，与实际内容无关。
                </div>
                <table class="table table-bordered" align="center">
                    <tr>
                        <!--<th class="check">选择</th>-->
                        <th>编号</th>
                        <th>日期</th>
                        <th>内容</th>
                        <th>规格</th>
                        <th>数量</th>
                        <th>面积</th>
                        <th>单价</th>
                        <th>金额</th>
                        <th width="90">操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                        <tr>
                            <!--<th class="check"><input type="checkbox" name="select" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
"/></th>-->
                            <?php  $_smarty_tpl->tpl_vars['con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['con']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['element']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['con']->key => $_smarty_tpl->tpl_vars['con']->value){
$_smarty_tpl->tpl_vars['con']->_loop = true;
?>
                                <td><div class="thclass"><?php echo $_smarty_tpl->tpl_vars['con']->value;?>
</div></td>
                            <?php } ?>
                            <td>
                                <button class="btn btn-mini btn-primary" type="button" onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
' + '?edit=' + <?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
">编辑</button>
                                <button class="btn btn-mini btn-danger" type="button" onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
' + '?delete=' + <?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
">删除</button>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <!--<button class="btn btn-danger" type="button">删除选中账目</button>-->
            </form>
        </div>
    </body>
</html><?php }} ?>