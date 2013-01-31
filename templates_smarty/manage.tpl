<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{$shop_name}记账系统</title>
        <link rel="stylesheet" type="text/css" href="{$css_position}">
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
                    {foreach from=$accounts item=element}
                        <tr>
                            <!--<th class="check"><input type="checkbox" name="select" value="{$element.id}"/></th>-->
                            {foreach from=$element item=con}
                                <td><div class="thclass">{$con}</div></td>
                            {/foreach}
                            <td>
                                <button class="btn btn-mini btn-primary" type="button" onClick="javascript:window.location.href='{$nowpage}' + '?edit=' + {$element.id}">编辑</button>
                                <button class="btn btn-mini btn-danger" type="button" onClick="javascript:window.location.href='{$nowpage}' + '?delete=' + {$element.id}">删除</button>
                            </td>
                        </tr>
                    {/foreach}
                </table>
                <!--<button class="btn btn-danger" type="button">删除选中账目</button>-->
            </form>
        </div>
    </body>
</html>