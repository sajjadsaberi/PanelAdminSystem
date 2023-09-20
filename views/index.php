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
       
        })
    </script>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/user-manager.css">
    <link rel="stylesheet" href="./font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../node_modules/persian-datepicker/dist/css/persian-datepicker.min.css">
    <link rel="stylesheet" href="./scripts/jquery.dataTables.css">
    <title>سامانه اتوماسیون سرای مهر</title>
</head>
<body>
<div id="container">
<!-- Panel -->

<section id="panel">

    <ul id="panel-items">
    <li class="logo">
        
        <span>مرکز بازپروری سرای مهر</span>
    </li>
    <li class="profile">
        <img src="./images/aks.png" alt="Profile">
        <div class="online"><i class="fa fa-refresh fa-spin fa-3x fa-fw" aria-hidden="true"></i></div>
        <span><span><?php echo $_SESSION["admin-name"]; ?></span><span><?php if($_SESSION["admin-managment"] == "full") {echo "مدیر کل";}elseif($_SESSION["admin-managment"] == "manager"){echo "مدیر مجموعه";}else{echo "منشی";}  ?></span></span>
    </li>
    <li>
        
        <a href="../PHP/router/dashboard.php" class="a-in-li"><i class="fa fa-home"></i> داشبورد </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-users" class="a-in-li"></i> مدیریت کاربران <i class="fa fa-plus pluss" aria-hidden="true"></i></a>

    </li>
    <li id="users-manager">
        <a href="#users-manager" class="a-in-li"><i class="fa-duotone fa-user"></i> مدیریت مدد جویان <i class="fa fa-plus pluss" aria-hidden="true"></i></a>
        <div class="sub-menu">
                <a href="../PHP/router/user-manager/add-user.php"><i class="fa fa-plus"></i> اضافه کردن کاربر </a>
                <a href="../PHP/router/user-manager/show-all-users.php"><i class="fa fa-search"></i> نمایش همه کاربران </a>
            </div>
    </li>
    <li>
        <a href="#"><i class="fa fa-message" class="a-in-li"></i>گزارش گیری<i class="fa fa-plus pluss" aria-hidden="true"></i></a>
    </li>
    <li>
        <a href="../PHP/router/addadmin.php"><i class="fa fa-user-plus" aria-hidden="true"></i>افزودن مدیر<i class="fa fa-plus pluss" aria-hidden="true"></i></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>تنظیمات قالب<i class="fa fa-plus pluss" aria-hidden="true"></i></a>
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
    <button><i class="fa fa-align-right" aria-hidden="true"></i></button>
    </section>
    <section class="head-text">
    <i class="fa fa-quote-right" aria-hidden="true"></i>
    <div id="randomText" onload="displayRandomText()"></div>
    </section>
    <section class="head-items">
        <a href="#"><i class="fa fa-arrow-right"></i></a>
        <a href="#" id="notification-button"><i class="fa fa-envelope"></i></a>
        <div id="notification-menu" class="hidden">
    <ul>
        <li><a href="#">اعلان شماره 1</a></li>
        <li><a href="#">اعلان شماره 2</a></li>
        <li><a href="#">اعلان شماره 3</a></li>
        <li><a href="#">اعلات شماره 4</a></li>
        <li><a href="#">اعلان شماره 3</a></li>
        <li><a href="#">اعلات شماره 5</a></li>
    </ul>
</div>
        <span class="head-prof">
            <img src="./images/aks.png" alt="Profile">
        </span>
    </section>
</header>

    <!-- End Header -->


    <!-- Content  -->

<div id="content">

    <!-- Root User -->

<div class="title-box">
    <div class="icon-box"><i class="fa fa-home"></i></div>
    <a href="#" target="_self">صفحه اصلی</a>
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
        <span class="number" data-count="973">0</span>
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
        <span class="about">تعداد ترخیص ها</span>
        <span class="number" data-count="1127">0</span>
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

<div class="table">

<table id="data-table" class="display" data-order='[[ 1, "asc" ]]' data-page-length='10'>
<thead>
    <tr>
        <th>ردیف</th>
        <th>نام و نام خانوادگی</th>
        <th>نام پدر</th>
        <th>تاریخ پذیرش</th>
        <th>تاریخ ترخیص</th>
        <th>مسـًول پذیرش</th>
    </tr>
</thead>

    
    <?php
    if ($run_query->num_rows > 0) {
        
            for ($i = 1 ; $i <= $run_query->num_rows ; $i++) {
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
        for ($i = 0 ; $i < $run_query->num_rows ; $i++) {
            $row = $run_query->fetch_assoc();
                    echo "<li>";
                    echo $_SESSION["news"];
                    echo " در سامانه ثبت شد ";
                    echo "</li>";
    }  } else {
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
            <select name="education" id="education" style="width: 85%;">
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
        <td><input name="submit" type="submit" value="افزودن مدد جو"></td>
        <td><button type="reset">پاک کردن فرم</button></td>
    </tr>
</table>

    </form>



<?php }elseif($_SESSION["permission"] == "showallusers"){ ?>


<!-- Table Users -->
<table class="all-table display" data-order='[[ 1, "asc" ]]' data-page-length='25'  id="alluser-table">
    <thead>
<tr>
    <th>ردیف</th>
    <th>نام و نام خانوادگی</th>
    <th>نام پدر</th>
    <th>جنسیت</th>
    <th>تاریخ تولد</th>
    <th>شماره شناسنامه</th>
    <th>محل صدور</th>
    <th>کد ملی</th>
    <th>تحصیلات</th>
    <th>شغل</th>
    <th>تاهل</th>
    <th>دین</th>
    <!-- <th>مذهب</th> -->
    <th>آدرس</th>
    <th>تاریخ ورود</th>
    <th>تاریخ ترخیص</th>
    <!-- <th>پذیرش قبلی</th> -->
    <th>نام مسـًول</th>
    <!-- <th>نام تحویل دهنده</th> -->
</tr>
</thead>
<?php
    if ($run_query->num_rows > 0) {
            for ($i = 1 ; $i <= $run_query->num_rows ; $i++) {
                $row = $run_query->fetch_assoc();
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["fathername"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["birth"] . "</td>";
                echo "<td>" . $row["shsh"] . "</td>";
                echo "<td>" . $row["loc"] . "</td>";
                echo "<td>" . $row["codemeli"] . "</td>";
                echo "<td>" . $row["eduction"] . "</td>";
                echo "<td>" . $row["job"] . "</td>";
                echo "<td>" . $row["taahol"] . "</td>";
                echo "<td>" . $row["din"] . "</td>";
                // echo "<td>" . $row["mazhab"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["logdate"] . "</td>";
                echo "<td>" . $row["outdate"] . "</td>";
                // echo "<td>" . $row["dublelog"] . "</td>";
                echo "<td>" . $row["adminname"] . "</td>";
                // echo "<td>" . $row["policename"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo "<td colspan='19'>اطلاعاتی وجود ندارد</td>";
            echo "</tr>";
        }
?>
</table>


    <?php }elseif($_SESSION["permission"] == "addadmin"){ ?>




        <form action="../PHP/addadmin.php" id="add-user-form" method="post">

<table>
    <tr>
        <td><input required name="username" type="text" placeholder="نام کاربری"></td>
        <td><input required name="password" type="text" placeholder="کلمه عبور"></td>
    </tr>
    <tr>
        <td>
<input required name="fullname" type="text" placeholder="نام و نام خانوادگی">
        </td>
        <td>
<input required name="basename" type="text" placeholder="نام مجموعه">
        </td>
        <tr>
        <td>
        <select name="roll" id="gender">
            <option value="null" disabled selected>نقش</option>
            <option value="full">مدیر کل</option>
            <option value="manager">مدیر مجموعه</option>
            <option value="writer">کاربر سیستم</option>
        </select>
        </td>
        <td>
        <input required name="databasename" type="text" placeholder="نام مجموعه در دیتابیس (فقط انگلیسی)">
        </td>
    </tr>
    <tr>
        <td id="icn"><i class="fa fa-user-plus" aria-hidden="true"></i><input name="submit" type="submit" value="افزودن مدیر مجموعه"></td>
        <td><button type="reset"><i class="fa fa-trash" aria-hidden="true"></i>
پاک کردن فرم</button></td>
    </tr>

</table>
    </form>





    <?php }else{header("Location:../PHP/router/dashboard.php");} ?>



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
<script src="./scripts/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    
    $('#alluser-table').DataTable({
        searching: true,
        lengthMenu: [10, 25, 50, 100], // نمایش تعداد نتایج جستجو
        search: {
            regex: true // استفاده از جستجوی دقیق
        },
    });

    $('#data-table').DataTable({
        searching: true,
        lengthMenu: [10, 25, 50, 100], // نمایش تعداد نتایج جستجو
        search: {
            regex: true // استفاده از جستجوی دقیق
        },
});

});
</script>
</html>