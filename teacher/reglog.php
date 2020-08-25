<?php
include ("header.php");
?>

<div class="container" style="padding-top:70px;">
    <div class="col-md-12 center-block" style="float: none;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead><tr><th>记录ID</th><th>学生姓名</th><th>班级</th><th>分数1</th><th>分数2</th><th>分数3</th><th>操作人</th><th>备注</th><th>时间</th></tr></thead>
                <?php
                $result = mysqli_query($conn,'SELECT participation_total.`recordid`,participation_total.`stuid`,participation_total.`score1`,participation_total.`score2`,participation_total.`score3`,participation_total.`teacherid`,participation_total.`remark`,participation_total.`date` FROM participation_total WHERE participation_total.`teacherid`='.$_SESSION['userid'].';');

                if (mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><th>" . $row['recordid'] . "</th><td>" . getname($row['stuid']) . "</td><td>" . getclass($row['stuid']) . "</td><td>" . $row['score1'] . "</td><td>" . $row['score2'] . "</td><td>" . $row['score3'] . "</td><td>" . getname($row['teacherid']) . "</td><td>" . $row['remark'] . "</td><td>" . $row['date'] . "</td>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>