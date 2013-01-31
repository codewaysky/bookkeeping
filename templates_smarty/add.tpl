<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{$shop_name}记账系统</title>
        <link rel="stylesheet" type="text/css" href="{$css_position}">
        <script src="js/date.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">欢迎使用！</a>
                    <ul class="nav">
                        <li><a href="index.php">主页</a></li>
                        {foreach from=$contents key=name item=address}
                            {if $address == $nowpage}
                                <li class="active"><a href="{$address}">{$name}</a></li>
                            {else}
                                <li><a href="{$address}">{$name}</a></li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            </div>
            {if $state == "error"}
                <div class="alert alert-error" align="center">
                    连接数据库错误。
                </div>
            {elseif $state == "add"}
                <form class="form-horizontal" action="{$nowpage}" method="get">
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
            {elseif $state == "ok"}
                <div class="alert alert-success" align="center">
                    <a href="{$nowpage}">该账目添加完成，请选择下一步操作。</a>
                    <br />
                    <br />
                    <a class="btn btn-primary" href="add_accounts.php">
                            继续添加账目
                    </a>
                    <a class="btn btn-primary" href="manage_accounts.php">
                            管理账目
                    </a>
                </div>
            {/if}
            </div>
        </body>
    </html>