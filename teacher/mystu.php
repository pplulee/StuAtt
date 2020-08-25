<?php
include ("./header.php");
?>

<div class="container" style="padding-top:70px;">
    <div class="col-md-12 center-block" style="float: none;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead><tr><th>用户ID</th><th>用户名</th><th>邮箱</th><th>班级</th></tr></thead>
                <?php
                $result = mysqli_query($conn,"SELECT user.`userid`,user.`username`,user.`email` FROM `user`,`classes` WHERE classes.`teacherid`='".$_SESSION["userid"]."' AND user.`userid`=classes.`stuid`;");

                if (mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        $class = mysqli_fetch_assoc(mysqli_query($conn, "SELECT classnumber FROM classes WHERE stuid='" . $row['userid'] . "';"))["classnumber"];
                        echo "<tr><th>" . $row['userid'] . "</th><td>" . $row['username'] . "</td><td>" . $row['email'] . "</td><td>" . $class . "</td><td><a href=\"./edituser.php?action=edit&id=";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>

