<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{$shop_name}记账系统 - 安装程序</title>
        <link rel="stylesheet" type="text/css" href="{$css_position}">
    </head>
    
    <body>
        <div class="container">
            <h3 align="center">{$shop_name}记账系统 - 安装程序</h3>
            {if $state == "installed"}
                <div class="alert alert-success" align="center">
                    <a href="index.php">您已经安装过此程序，请点击这里回主页。</a>
                </div>
            {elseif $state == "not installed"}
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
            {elseif $state == "database_connect_error"}
                <div class="alert alert-error" align="center">
                    连接数据库错误，请仔细检查刚才所填写的信息。
                </div>
            {elseif $state == "ok"}
                <div class="alert alert-success" align="center">
                    <a href="index.php">安装已经完成，请点击这里回主页。</a>
                </div>
            {/if}
        </div>
    </body>
</html>