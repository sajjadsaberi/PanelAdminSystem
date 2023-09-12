<?php

include_once "../utils/connection.php";

session_start();
error_reporting(0);

// PHP Code 

$admin_permission = $_SESSION["admin-permission"];

$query_add_user = "
select * from $admin_permission;
";

$run_query = $mysqli->query($query_add_user);


// End PHP Code
?>
<section id="info">

    <div class="info-box box-users" style="background-color: #2d5be4;">
    <div class="info">
        <span class="about">تعداد مدد جویان</span>
        <span class="number" data-count="1154">0</span>
    </div>
    <div class="icon"><i class="fa fa-users"></i></div>
    </div>
    <div class="info-box box-coin" style="background-color: #f39c12;">
    <div class="info">
        <span class="about">هزینه های دریافتی</span>
        <span class="number" data-count="321">0</span>
    </div>
    <div class="icon"><i class="fa fa-coin"></i></div>
    </div>
    <div class="info-box box-sign" style="background-color: #00a65a;color: #FFF;">
    <div class="info">
        <span class="about">تعداد ترخیص شده ها</span>
        <span class="number" data-count="982">0</span>
    </div>
    <div class="icon"><i class="fa fa-sign-in"></i></div>
    </div>
    <div class="info-box box-user" style="background-color: #ff4949;">
    <div class="info">
        <span class="about">تعداد کارکنان</span>
        <span class="number" data-count="154">0</span>
    </div>
    <div class="icon"><i class="fa fa-user"></i></div>
    </div>




</section>



    <!-- Charts -->

<div class="Chart1">
    <canvas id="myChart" width="1000" height="500" style="border: 1px solid #eee;"></canvas>
    <canvas id="myChart1" width="1000" style="border: 1px solid #eee;"></canvas>
</div>

    <!-- End Charts -->

        <!-- Start Activity -->

<div id="activity">


    <!-- Tables -->
    <div class="activity-box tables">

    <form id="filters">

    <select name="filter" class="filter-menu">
    <option class="filter-item" value="number" selected>براساس شماره ردیف</option>
    <option class="filter-item" value="today">امروز</option>
    <option class="filter-item" value="week">هفته گذشته</option>
    <option class="filter-item" value="month">ماه گذشته</option>
    <option class="filter-item" value="years">سال گذشته</option>
    </select>

    <input type="submit" value="اعمال فیلتر">

</form>

<div class="table">

    <table id="data-table">

    <tr>
        <th>ردیف</th>
        <th>نام و نام خانوادگی</th>
        <th>نام پدر</th>
        <th>تاریخ پذیرش</th>
        <th>تاریخ ترخیص</th>
        <th>مسـًول پذیرش</th>
    </tr>

    <?php
    if ($run_query->num_rows > 0) {
            for ($i = 0 ; $i <= $run_query->num_rows ; $i++) {
                $row = $run_query->fetch_assoc();
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["fathername"] . "</td>";
                echo "<td>" . $row["logdate"] . "</td>";
                echo "<td>" . $row["outdate"] . "</td>";
                echo "<td>" . $row["adminname"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo "<td colspan='6'>اطلاعاتی وجود ندارد</td>";
            echo "</tr>";
        }
    ?>
    </table>

</div>

</div>


    <!-- News -->
<div class="activity-box news">
    <span id="arrow-news"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
<ul>
<?php
    if ($run_query->num_rows > 0) {
                    echo "<li>";
                    echo $_SESSION["news"];
                    echo " در سامانه ثبت شد ";
                    echo "</li>";
        } else {
            echo "<tr>";
            echo "<td>اطلاعاتی وجود ندارد</td>";
            echo "</tr>";
        }
?>
</ul>


    </div>
</div>