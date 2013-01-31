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
            {/if}
            
            <form class="form-horizontal" action="{$nowpage}" method="get">
                <div class="control-group">
                    <div class="controls">
                        <h3>编辑账目</h3>      
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">编号：</label>
                    <div class="controls">
                        <input type="text" name="id" value="{$rows.id}" readonly/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">日期：</label>
                    <div class="controls">
                        <input type="text" name="date" value="{$rows.date}" onfocus="HS_setDate(this)" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">内容：</label>
                    <div class="controls">
                        <textarea rows="4" name="contents">{$rows.contents}</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">规格：</label>
                    <div class="controls">
                        <input type="text" name="norms" value="{$rows.norms}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">数量：</label>
                    <div class="controls">
                        <input type="text" name="amount" value="{$rows.amount}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">面积：</label>
                    <div class="controls">
                        <input type="text" name="area" value="{$rows.area}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">单价：</label>
                    <div class="controls">
                        <input type="text" name="unit_price" value="{$rows.unit_price}"/>
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
</html>