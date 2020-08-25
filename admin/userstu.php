<?php
include ("./header.php");
?>
<div class="form-group">
    <label><h2>搜索用户</h2></label>
    <form action="userstu.php" method="get">
        姓名：<input type="text" class="form-control" name="search" placeholder=请输入查询姓名>
        <input type='submit' class='btn btn-primary btn-block' value='搜索'>
    </form>
</div>
<div class="container" style="padding-top:70px;">
    <div class="col-md-12 center-block" style="float: none;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead><tr><th>用户ID</th><th>用户名</th><th>邮箱</th><th>班级</th><th>操作</th></tr></thead>
                <?php
                if (!(isset($_GET["search"]))){
                    $search = "";
                }else{
                    $search = $_GET["search"];
                }
                $result = mysqli_query($conn,"SELECT userid,username,email,permission FROM user WHERE permission=1 AND `username` LIKE '".$search."%';");

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