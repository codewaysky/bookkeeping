<?php /* Smarty version Smarty-3.1.13, created on 2013-01-30 20:50:56
         compiled from "templates_smarty/manage_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:756348705109173085b715-90070358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf9c82f1bd37aea2d04b8d488df6accb4809c77' => 
    array (
      0 => 'templates_smarty/manage_edit.tpl',
      1 => 1359443284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756348705109173085b715-90070358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'css_position' => 0,
    'contents' => 0,
    'address' => 0,
    'nowpage' => 0,
    'name' => 0,
    'state' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_510917309b95c3_54307111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510917309b95c3_54307111')) {function content_510917309b95c3_54307111($_smarty_tpl) {?><html>
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
            <?php }?>
            
            <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['nowpage']->value;?>
" method="get">
                <div class="control-group">
                    <div class="controls">
                        <h3>编辑账目</h3>      
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">编号：</label>
                    <div class="controls">
                        <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" readonly/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">日期：</label>
                    <div class="controls">
                        <input type="text" name="date" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['date'];?>
" onfocus="HS_setDate(this)" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">内容：</label>
                    <div class="controls">
                        <textarea rows="4" name="contents"><?php echo $_smarty_tpl->tpl_vars['rows']->value['contents'];?>
</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">规格：</label>
                    <div class="controls">
                        <input type="text" name="norms" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['norms'];?>
"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">数量：</label>
                    <div class="controls">
                        <input type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['amount'];?>
"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">面积：</label>
                    <div class="controls">
                        <input type="text" name="area" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['area'];?>
"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">单价：</label>
                    <div class="controls">
                        <input type="text" name="unit_price" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['unit_price'];?>
"/>
                    </div>
                </div>    
                <div class="control-group">
                    <div class="controls">                    
                        <button type="submit" class="btn btn-primary">提交修改</button>             
                    </div>
                </div>
            </form>
        </div>
    </body>
</html><?php }} ?>