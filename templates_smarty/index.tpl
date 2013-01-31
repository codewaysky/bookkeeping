<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{$shop_name}记账系统</title>
        <link rel="stylesheet" type="text/css" href="{$css_position}">
    </head>
    
    <body>
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">欢迎使用！</a>
                    <ul class="nav">
                        <li class="active"><a href="index.php">主页</a></li>
                        {foreach from=$contents key=name item=address}
                            <li><a href="{$address}">{$name}</a></li>
                        {/foreach}
                    </ul>
                </div>
            </div>
            <div class="hero-unit" align="center">
                <h1>{$shop_name}记账系统</h1>
                <p>开始您的轻松生活~</p>
                <p>
                    {foreach from=$contents key=name item=address}
                        <a class="btn btn-primary btn-large" href="{$address}">
                            {$name}
                        </a>
                    {/foreach}
                </p>
            </div>
        </div>
    </body>
</html>