<?php
include ("header.php");
?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">服务器信息</h3>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            <b>PHP 版本：</b><?php echo phpversion() ?>
            <?php if(ini_get('safe_mode')) { echo '线程安全'; } else { echo '非线程安全'; } ?>
        </li>
        <li class="list-group-item">
            <b>MySQL 版本：</b><?php echo mysqli_get_server_version($conn) ?>
        </li>
        <li class="list-group-item">
            <b>服务器软件：</b><?php echo $_SERVER['SERVER_SOFTWARE'] ?>
        </li>

        <li class="list-group-item">
            <b>程序最大运行时间：</b><?php echo ini_get('max_execution_time') ?>s
        </li>
        <li class="list-group-item">
            <b>POST许可：</b><?php echo ini_get('post_max_size'); ?>
        </li>
        <li class="list-group-item">
            <b>文件上传许可：</b><?php echo ini_get('upload_max_filesize'); ?>
        </li>
        <li class="list-group-item">
            <b>程序开发 by @baiyimiao</b>
        </li>
    </ul>
</div>