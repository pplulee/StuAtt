<?php
include ("./header.php");
?>

<div class="container" style="padding-top:70px;">
    <div class="col-md-12 center-block" style="float: none;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead><tr><th>用户ID</th><th>用户名</th><th>邮箱</th><th>班级</th><th>操作</th></tr></thead>
                <?php

                $result = mysqli_query($conn,"SELECT userid,username,email,permission FROM user WHERE permission=1;");

                if (mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_assoc($result)) {
                            $class = mysqli_fetch_assoc(mysqli_query($conn, "SELECT classnumber FROM classes WHERE stuid='" . $row['userid'] . "';"))["classnumber"];
                            echo "<tr><th>" . $row['userid'] . "</th><td>" . $row['username'] . "</td><td>" . $row['email'] . "</td><td>" . $class . "</td><td><a href=\"./edituser.php?action=edit&id=" . $row['userid'] . '" class="btn btn-xs btn-info">编辑</a></td>';
                        }
                }
                ?>
            </table>
        </div>
    </div>
</div>

