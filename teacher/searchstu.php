<?php
include ("header.php");
?>
<div class="form-group">
    <label><h2>搜索学生</h2></label>
    <form action="searchstu.php" method="get">
        姓名：<input type="text" class="form-control" name="username" placeholder=请输入查询姓名>
        <input type='submit' class='btn btn-primary btn-block' value='搜索'>
    </form>
    <form action="searchstu.php" method="get">
        班级：<input type="text" class="form-control" name="class" placeholder=请输入班级>
        <input type='submit' class='btn btn-primary btn-block' value='搜索'>
    </form>
    <form action="searchstu.php" method="get">
        年级：<input type="text" class="form-control" name="year" placeholder=请输入年级>
        <input type='submit' class='btn btn-primary btn-block' value='搜索'>
    </form>
</div>
<div class="container" style="padding-top:70px;">
    <div class="col-md-12 center-block" style="float: none;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead><tr><th>用户ID</th><th>用户名</th><th>邮箱</th><th>班级</th></tr></thead>
                <?php
                if (!(isset($_GET["username"]) OR isset($_GET["class"]) OR isset($_GET["year"]))){
                    $search = "";
                }else{
                    if (isset($_GET["username"])){
                        SearchByName($_GET["username"]);
                    }else if (isset($_GET["class"])){
                        SearchByClass($_GET["class"]);
                    }else if (isset($_GET["year"])){
                        SearchByYear($search=$_GET["year"]);
                    }
                }

                function SearchByName($search){
                    global $conn;
                    $result = mysqli_query($conn,"SELECT userid,username,email,permission,class FROM user WHERE permission=1 AND username LIKE '".$search."%';");

                    if (mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><th>" . $row['userid']."</th><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['class']."</td>";
                        }
                    }
                }
                function SearchByClass($search){
                    global $conn;
                    $result = mysqli_query($conn,"SELECT userid,username,email,permission,class FROM user WHERE permission=1 AND class = ".$search.";");

                    if (mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><th>" . $row['userid']."</th><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['class']."</td></td>";
                        }
                    }
                }
                function SearchByYear($search){
                    global $conn;
                    $result = mysqli_query($conn,"SELECT userid,username,email,permission,class FROM user WHERE permission=1 AND year = ".$search.";");

                    if (mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><th>" . $row['userid']."</th><td>".$row['username']."</td><td>".$row['email']."</td>";
                        }
                    }
                }


                ?>
            </table>
        </div>
    </div>
</div>