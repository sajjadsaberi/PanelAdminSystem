<?php

include_once "../utils/connection.php";

session_start();
error_reporting(0);

// PHP Code 

$query_add_user = "
select * from users;
";

$run_query = $mysqli->query($query_add_user);


// End PHP Code
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./styles/bootstrap/bootstrap.rtl.css"> -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/user-manager.css">
    <link rel="stylesheet" href="./font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../node_modules/persian-datepicker/dist/css/persian-datepicker.min.css">
    <link rel="stylesheet" href="./scripts/DataTables/datatables.min.css" />
    <title>Welcome To Panel</title>
</head>
<body>
    
<div id="container">

<!-- Panel -->

<section id="panel">

    <ul id="panel-items">
    <li class="logo">
        
        <span>سامانه مدیریت</span>
    </li>
    <li class="profile">
        <img src="./images/prof.jpg" alt="Profile">
        <span>امیرحسین صادقی</span>
    </li>
    <li>
        
        <a href="../PHP/router/dashboard.php" class="a-in-li"><i class="fa fa-home"></i> داشبورد </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-message" class="a-in-li"></i>گزارش گیری ها</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-users" class="a-in-li"></i> مدیریت کاربران </a>
    </li>
    <li id="users-manager">
        <a href="#users-manager" class="a-in-li"><i class="fa-duotone fa-user"></i> مدیریت مدد جویان </a>
        <div class="sub-menu">
                <a href="../PHP/router/user-manager/add-user.php"><i class="fa fa-plus"></i> اضافه کردن کاربر </a>
                <a href="../PHP/router/user-manager/show-all-users.php"><i class="fa fa-search"></i> نمایش همه کاربران </a>
            </div>
    </li>
    <li>
        <a href="#"><i class="fa fa-cog"></i>تنظیمات قالب</a>
    </li>
    <li>
        <a href="../PHP/router/exit.php"><i class="fa fa-sign-out"></i> خروج از حساب </a>
    </li>
    </ul>

</section>

<!-- Content Page -->

<section id="content-box">  

    <!-- Header -->

<header>
        <section class="head-menu">
            <i class="fa fa-bars" onclick="menubtn()"></i>
        </section>
        <section class="head-items">
            <a href="#"><i class="fa fa-arrow-right"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
            <span class="head-prof">
                <img src="./images/prof.jpg" alt="Profile">
            </span>
        </section>
</header>

    <!-- End Header -->


    <!-- Content  -->

<div id="content">

    <!-- Root User -->

<div class="title-box">
    <div class="icon-box"><i class="fa fa-home"></i></div>
    <h4>صفحه اصلی</h4>
    <div class="icon-box2"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>

    <div id="widget">
                <input disabled type="text" name="persianDatapicker" class="persianDatapicker">
            </div>

</div>


<?php if($_SESSION["permission"] == "exit"){
    header("Location:login/index.php");
}elseif($_SESSION["permission"] == "dashboard"){ ?>


<section id="info">

    <div class="info-box box-users">
    <div class="info">
        <span class="about">تعداد مدد جویان</span>
        <span class="number">253</span>
    </div>
    <div class="icon"><i class="fa fa-users"></i></div>
    </div>
    <div class="info-box box-coin">
    <div class="info">
        <span class="about">هزینه ی دوره</span>
        <span class="number">321</span>
    </div>
    <div class="icon"><i class="fa fa-coin"></i></div>
    </div>
    <div class="info-box box-sign">
    <div class="info">
        <span class="about">تعداد ثبت نام ها</span>
        <span class="number">1864</span>
    </div>
    <div class="icon"><i class="fa fa-sign-in"></i></div>
    </div>
    <div class="info-box box-user">
    <div class="info">
        <span class="about">تعداد پرسنل</span>
        <span class="number">154</span>
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
            echo "<td>اطلاعاتی وجود ندارد</td>";
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
    <li>این یک تست است<span id="alert-news"><i class="fa fa-bg-light" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
    <li>این یک تست است<span id="alert-news"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span></li>
</ul>


</div>

    </div>

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
            <option value="men">مرد</option>
            <option value="women">زن</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="birth">تاریخ تولد : </label>
        </td>
        <td>
            <div id="cleander">
                <input required type="text" name="birthdate" class="persianDatapicker">
            </div>
        </td>
        <td>
            <label for="birth">تاریخ پذیرش : </label>
        </td>
        <td>
            <div id="cleander">
                <input required type="text" name="signdate" class="persianDatapicker">
            </div>
        </td>
    </tr>
    <tr>
        <td><input required type="number" name="shsh" placeholder="شماره شناسنامه"></td>
        <td><input required type="text" name="loc" placeholder="محل صدور شناسنامه"></td>
        <td>
            <select name="education" id="education" style="width: 85%;">
                <option value="null" selected disabled>تحصیلات</option>
                <option value="zirdiplom">زیر دیپلم</option>
                <option value="diplom">دیپلم</option>
                <option value="lisanse">لیسانس</option>
                <option value="fogh">فوق لیسانس</option>
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
                <option value="rell">متاهل</option>
                <option value="single">مجرد</option>
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
                <input type="text" name="outdate" class="persianDatapicker">
            </div>
        </td>
        <td>
            <label for="birth">تاریخ پذیرش قبلی : </label>
        </td>
        <td>
            <div id="cleander">
                <input type="text" name="dublelog" class="persianDatapicker">
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


    <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>


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
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/persian-datepicker/dist/js/persian-datepicker.min.js"></script>
<script src="../node_modules/persian-date/dist/persian-date.min.js"></script>
<script src="./scripts/app.js"></script>
<script src="./scripts/table.js"></script>
<script src="./scripts/DataTables/datatables.min.js"></script>
<!-- <script src="./scripts/bootstrap/bootstrap.min.js.map"></script> -->
</html>