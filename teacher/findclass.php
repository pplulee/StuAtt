<?php
include ("header.php");
?>
<div class="form-group">
    <label><h2>查找班级</h2></label>
    <form action="findclass.php" method="get">
        班级：<input type="text" class="form-control" name="search" placeholder=请输入班级>
        <input type='submit' class='btn btn-primary btn-block' value='搜索'>
    </form>
</div>
<div class="container" style="padding-top:70px;">
    <div class="col-md-12 center-block" style="float: none;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead><tr><th>用户ID</th><th>用户名</th><th>邮箱</th><th>班级</th></tr></thead>
                <?php
                if (isset($_GET["search"])) {
                    $result = mysqli_query($conn, "SELECT email,userid,username,class FROM user WHERE class=".$_GET["search"].";");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><th>".$row["userid"]."</th><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["class"]."</td>";
                        }
                    }else{
                        echo "没有查询到结果";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>