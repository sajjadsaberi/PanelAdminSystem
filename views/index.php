<?php
session_start();
error_reporting(0);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./styles/bootstrap/bootstrap.rtl.css"> -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/user-manager.css">
    <link rel="stylesheet" href="./font-awesome/font-awesome.css">

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
        <a href="#"><i class="fa fa-message" class="a-in-li"></i> پیام ها </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-users" class="a-in-li"></i> مدیریت کاربران </a>
    </li>
    <li id="users-manager">
        <a href="#users-manager" class="a-in-li"><i class="fa-duotone fa-user"></i> مدیریت مدد جویان </a>
        <div class="sub-menu">
                <a href="../PHP/router/user-manager/add-user.php"><i class="fa fa-plus"></i> اضافه کردن کاربر </a>
                <a href="#"><i class="fa fa-search"></i> نمایش همه کاربران </a>
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
        <span id="time">00:00:00</span>
        <span id="date">00/00/00</span>
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
        <td>ردیف</td>
        <td>نام و نام خانوادگی</td>
        <td>نام پدر</td>
        <td>تاریخ پذیرش</td>
        <td>نحوه پذیرش</td>
        <td>تاریخ ترخیص</td>
    </tr>
    <tr>
        <td>1</td>
        <td>امیرحسین صادقی</td>
        <td>ابراهیم</td>
        <td>1/1/1401</td>
        <td>خالی</td>
        <td>1/2/1401</td>
    </tr>
    <tr>
        <td>2</td>
        <td>امیرحسین صادقی</td>
        <td>ابراهیم</td>
        <td>1/1/1401</td>
        <td>خالی</td>
        <td>1/2/1401</td>
    </tr>
</table>

</div>

</div>


    <!-- News -->
<div class="activity-box news">

<ul>
    <li>این یک تست است</li>
    <li>این یک تست است</li>
    <li>این یک تست است</li>
    <li>این یک تست است</li>
    <li>این یک تست است</li>
    <li>این یک تست است</li>
    <li>این یک تست است</li>
</ul>


</div>

    </div>

<?php }if($_SESSION["permission"] == "addUser"){ ?>



    <form action="" id="add-user-form">

<table>
    <tr>
        <td><input type="text" placeholder="نام و نام خانوادگی"></td>
        <td><input type="text" placeholder="نام پدر"></td>
    </tr>
    <tr>
        <td>
<input type="number" placeholder="کد ملی">
        </td>
        <td>
        <select name="" id="gender">
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
        <td><input type="text" name="day" id="day" placeholder="روز"></td>
        <td><input type="text" name="month" id="month" placeholder="ماه"></td>
        <td><input type="text" name="year" id="year" placeholder="سال"></td>
    </tr>
    <tr>
        <td><input type="number" placeholder="شماره شناسنامه"></td>
        <td><input type="text" placeholder="محل صدور شناسنامه"></td>
    </tr>
    <tr>
        <td>
            <select name="education" id="education">
                <option value="null" selected disabled>تحصیلات</option>
                <option value="zirdiplom">زیر دیپلم</option>
                <option value="diplom">دیپلم</option>
                <option value="lisanse">لیسانس</option>
                <option value="fogh">فوق لیسانس</option>
            </select>
        </td>
        <td>
            <input type="text" placeholder="شغل">
        </td>
    </tr>
    <tr>
        <td><input type="text" placeholder="دین"></td>
        <td><input type="text" placeholder="مذهب"></td>
    </tr>
    <tr>
        <td style="width: 75%;"><input type="text" placeholder="آدرس محل سکونت"></td>
        <td style="width: 25%;">
            <select name="taahol" id="taahol" style="width: 82%;">
                <option value="null" selected disabled>وضعیت تاهل</option>
                <option value="rell">متاهل</option>
                <option value="single">مجرد</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="birth">تاریخ پذیرش : </label>
        </td>
        <td><input type="date" name="date" id="date" placeholder="روز/ماه/سال" /> </td>
        <td><input type="text" name="day" id="day" placeholder="روز"></td>
        <td><input type="text" name="month" id="month" placeholder="ماه"></td>
        <td><input type="text" name="year" id="year" placeholder="سال"></td>
    </tr>
    <tr>
        <td>
            <label for="birth">تاریخ ترخیص : </label>
        </td>
        <td><input type="date" name="date" id="date" placeholder="روز/ماه/سال" /> </td>
        <td><input type="text" name="day" id="day" placeholder="روز"></td>
        <td><input type="text" name="month" id="month" placeholder="ماه"></td>
        <td><input type="text" name="year" id="year" placeholder="سال"></td>
    </tr>
    <tr>
        <td>
            <label for="birth">تاریخ پذیرش قبلی : </label>
        </td>
        <td><input type="date" name="date" id="date" placeholder="روز/ماه/سال" /> </td>
        <td><input type="text" name="day" id="day" placeholder="روز"></td>
        <td><input type="text" name="month" id="month" placeholder="ماه"></td>
        <td><input type="text" name="year" id="year" placeholder="سال"></td>
    </tr>
    <tr>
        <td><input type="text" placeholder="نام مسـًول پذیرش"></td>
        <td><input type="text" placeholder="نام تحویل دهنده"></td>
    </tr>
    <tr>
        <td><input type="submit" value="افزودن کاربر"></td>
        <td><button type="reset">پاک کردن</button></td>
    </tr>
</table>

    </form>



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
<!-- <script src="./scripts/bootstrap/bootstrap.min.js.map"></script> -->
</html>