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
                            {if $address == "data.php"}
                                <li class="active"><a href="{$address}">{$name}</a></li>
                            {else}
                                <li><a href="{$address}">{$name}</a></li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            </div>
            {if $state == "upload"}
                <div class="hero-unit" align="center">
                    <h3>数据导入</h3>
                    <br />
                    <form action="data_import.php" method="post" enctype="multipart/form-data">
                        <div>
                            <!--<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />-->
                            <span class="btn btn-file">
                                请上传您的Excel文件：
                                <input type="file" name="xls" id="xls" />
                            </span>
                            <br /><br />
                            <button class="btn btn-large btn-primary" type="submit">上传</button>
                        </div>
                    </form>
                </div>
            {elseif $state == "error"}
                <div class="alert alert-error" align="center">
                    <p>{$error_info}</p>
                    <p><a href="data_import.php">点击这里返回上传页面重新上传Excel电子表格文档。</a></p>
                </div>
            {elseif $state == "ok"}
                <div class="alert alert-success" align="center">
                    账目导入完毕，请选择下一步操作。
                    <br />
                    <br />
                    <a class="btn btn-primary" href="add_accounts.php">增加账目</a>
                    <a class="btn btn-primary" href="manage_accounts.php">账目管理</a>
                    <a class="btn btn-primary" href="data_import.php">继续导入账目</a>
                </div>
            {/if}
        </div>
    </body>
</html>