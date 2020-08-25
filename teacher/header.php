<?php
include ("../include/common.php");
if (isteacher()==FALSE OR $_SESSION['isLogin']==FALSE){
    echo "<div class=\"alert alert-danger\" role=\"alert\"><h3>你没有权限访问该页面</h3></div>";
    echo "<a href=\"../index.php\"><button type=\"button\" class=\"btn btn-primary\">去首页</button></a>";
    exit;
}

//Nav bar
echo '
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">'.$sitename.'教师面板</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="../index.php">网站首页</a></li>
                <li><a href="findyear.php">年级查询</a></li>
                <li><a href="findstu.php">搜索学生</a></li>
                <li><a href="reglog.php">出勤记录</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>';
