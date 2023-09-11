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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="سامانه اتوماسیون اداری مرکز بازپروری سرای مهر استان کرمان"/>
    <meta name="robots" content="noindex, nofollow"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="copyright" content="مرکز بازپروری سرای مهر" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <!-- <link rel="stylesheet" href="./styles/bootstrap/bootstrap.rtl.css"> -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script>
        $(function(){
            $("#panel-include").load("../includes/panel.php");
            $("#header-include").load("../includes/header.php");
            $("#showalluser-include").load("../includes/showallusers.php");
        })
    </script>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/user-manager.css">
    <link rel="stylesheet" href="./font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../node_modules/persian-datepicker/dist/css/persian-datepicker.min.css">
    <link rel="stylesheet" href="./scripts/DataTables/datatables.min.css" />
    <title>سامانه اتوماسیون سرای مهر</title>
</head>
<body>
    
<div id="container">

<!-- Panel -->

<div id="panel-include"></div>

<!-- Content Page -->

<section id="content-box">  

    <!-- Header -->

<div id="header-include"></div>

    <!-- End Header -->


    <!-- Content  -->

<div id="content">

    <!-- Root User -->

<div class="title-box">
    <div class="icon-box"><i class="fa fa-home"></i></div>
    <h4>صفحه اصلی</h4>
    <div class="icon-box2"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    <h4 class="path"><?php echo $_SESSION["path"]; ?></h4>
    </div>

    <div id="widget">
                <input disabled type="text" name="persianDatapicker" class="persianDatapicker">
            </div>

</div>


<?php if($_SESSION["permission"] == "exit"){
    header("Location:login/index.php");
}elseif($_SESSION["permission"] == "dashboard"){ ?>


<section id="info">

    <div class="info-box box-users" style="background-color: #2d5be4;">
    <div class="info">
        <span class="about">تعداد مدد جویان</span>
        <span class="number" data-count="1254">0</span>
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
        <span class="number" data-count="1423">0</span>
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
<footer>
    <p>&copy; 2023 سامانه اتوماسیون مرکز بازپروری سرای مهر  -  تمامی حقوق محفوظ است  -  <a href="#"> طراحی و برنامه نویسی : امیرحسین صادقی</a></p>
</footer>

<?php }if($_SESSION["permission"] == "addUser"){ ?>

            <!-- Add User Form -->

    <form action="../PHP/user-manager/add-user.php" id="add-user-form" method="post">

<table>
    <tr>
        <td><input required name="name" type="text" placeholder="نام و نام خانوادگی"></td>
        <td><input required name="fathername" type="text" placeholder="نام پدر"></td>
    </tr>
    <tr>
        <td>
<input required name="codemeli" type="number" placeholder="کد ملی">
        </td>
        <td>
        <select name="gender" id="gender">
            <option value="null" disabled selected>جنسیت</option>
            <option value="مرد">مرد</option>
            <option value="زن">زن</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="birth">تاریخ تولد : </label>
        </td>
        <td>
            <div id="cleander">
                <input required type="text" name="birthdate" class="persianDatapicker" style="width: 240px;">
            </div>
        </td>
        <td>
            <label for="birth">تاریخ پذیرش : </label>
        </td>
        <td>
            <div id="cleander">
                <input required type="text" name="signdate" class="persianDatapicker" style="width: 240px;">
            </div>
        </td>
    </tr>
    <tr>
        <td><input required type="number" name="shsh" placeholder="شماره شناسنامه"></td>
        <td><input required type="text" name="loc" placeholder="محل صدور شناسنامه"></td>
        <td>
            <select name="eduction" id="education" style="width: 85%;">
                <option value="null" selected disabled>تحصیلات</option>
                <option value="بی سواد">بی سواد</option>
                <option value="زیردیپلم">زیر دیپلم</option>
                <option value="دیپلم">دیپلم</option>
                <option value="لیسانس">لیسانس</option>
                <option value="فوق لیسانس">فوق لیسانس</option>
                <option value="دکترا و بالاتر">دکترا و بالاتر</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><input name="din" required type="text" placeholder="دین"></td>
        <td><input name="mazhab" required type="text" placeholder="مذهب"></td>
        <td>
            <input name="job" required type="text" placeholder="شغل">
        </td>
    </tr>
    <tr>
        <td style="width: 75%;"><input name="address" required type="text" placeholder="آدرس محل سکونت"></td>
        <td style="width: 25%;">
            <select name="taahol" id="taahol" style="width: 82%;">
                <option value="null" selected disabled>وضعیت تاهل</option>
                <option value="متاهل">متاهل</option>
                <option value="مجرد">مجرد</option>
                <option value="مطلقه">مطلقه</option>
            </select>
        </td>
    </tr>
    <tr>
    
    </tr>
    <tr>
        <td>
            <label for="birth">تاریخ ترخیص : </label>
        </td>
        <td>
            <div id="cleander">
                <input type="text" name="outdate" class="persianDatapicker" style="width: 240px;">
            </div>
        </td>
        <td>
            <label for="birth">تاریخ پذیرش قبلی : </label>
        </td>
        <td>
            <div id="cleander">
                <input type="text" name="dublelog" class="persianDatapicker" style="width: 240px;">
            </div>
        </td>
    </tr>
    <tr>
        <td><input name="adminlog" required type="text" placeholder="نام مسـًول پذیرش"></td>
        <td><input name="police" required type="text" placeholder="نام تحویل دهنده"></td>
    </tr>
    <tr>
        <td><input onclick="createrow()" name="submit" type="submit" value="افزودن مدد جو"></td>
        <td><button type="reset">پاک کردن فرم</button></td>
    </tr>
</table>

    </form>



<?php }elseif($_SESSION["permission"] == "showallusers"){ ?>

    <div id="toolsbar">
        <input type="text" placeholder="حذف مددجو">
        <input type="text" placeholder="جستجو">
        <a href="../PHP/router/user-manager/add-user.php"><i class="fa fa-plus"></i> افزودن مددجو</a>
    </div>

<!-- Table Users -->
    <div id="showalluser-include"></div>


    <?php }else{header("Location:../PHP/router/dashboard.php");} ?>
    </div>


    <!-- End Content -->


</section>

</div>
</body>
<script src="../node_modules/chart.js/dist/chart.umd.js"></script>
<script src="./scripts/charts.js"></script>
<script src="./font-awesome/all.js"></script>
<script src="./scripts/script.js"></script>
<script src="../node_modules/persian-datepicker/dist/js/persian-datepicker.min.js"></script>
<script src="../node_modules/persian-date/dist/persian-date.min.js"></script>
<script src="./scripts/app.js"></script>
<script src="./scripts/table.js"></script>
<script src="./scripts/DataTables/datatables.min.js"></script>
<!-- <script src="./scripts/bootstrap/bootstrap.min.js.map"></script> -->
</html>