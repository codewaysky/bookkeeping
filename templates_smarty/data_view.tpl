<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{$shop_name}记账系统</title>
        <link rel="stylesheet" type="text/css" href="{$css_position}">
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
            <div class="hero-unit" align="center">
                <ul >
                    <li><a class="btn btn-primary btn-large" href="data_import.php">导入Excel文件</a></li>
                    <br />
                    <li><a class="btn btn-primary btn-large" href="data_export.php">导出Excel文件</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>