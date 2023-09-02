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

<input type="text" id="name" placeholder="نام و نام خانوادگی">
<input type="text" id="fathername" placeholder="نام پدر"><br>
<input type="number" id="codemeli" placeholder="کد ملی">
<input type="text" id="shsh" placeholder="شماره شناسنامه"><br>
<label for="birth"> تاریخ تولد : </label><input type="text" id="birth" placeholder="روز" class="dateinput"> / <input type="text" placeholder="ماه" class="dateinput"> / <input type="text" placeholder="سال" class="dateinput"><br>
<label for="logdate"> تاریخ ورود : </label><input type="text" id="birth" placeholder="روز" class="dateinput"> / <input type="text" placeholder="ماه" class="dateinput"> / <input type="text" placeholder="سال" class="dateinput"><br>
<input type="text" id="logway" placeholder="نحوه ورود">
<input type="text" id="logtime" placeholder="مدت حضور"><br>
<input type="text" id="loginfo" placeholder="علت حضور">
<input type="text" id="price" placeholder="مبلغ پرداختی"><br>
<label for="outdate">تاریخ ترخیص : </label><input type="text" id="birth" placeholder="روز" class="dateinput"> / <input type="text" placeholder="ماه" class="dateinput"> / <input type="text" placeholder="سال" class="dateinput"><br>
<input type="submit" value="افزودن کاربر"><button type="reset">پاک کردن</button>

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