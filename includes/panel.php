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
<section id="panel">
    <ul id="panel-items">
    <li class="logo">
        
        <span>مرکز بازپروری سرای مهر</span>
    </li>
    <li class="profile">
        <img src="./images/aks.png" alt="Profile">
        <div class="online"><i class="fa fa-circle" aria-hidden="true"></i></div>
        <span><span><?php echo $_SESSION["admin-name"]; ?></span><span><?php if($_SESSION["admin-managment"] == "full") {echo "مدیر کل";}elseif($_SESSION["admin-managment"] == "manager"){echo "مدیر مجموعه";}else{echo "منشی";}  ?></span></span>
    </li>
    <li>
        
        <a href="../PHP/router/dashboard.php" class="a-in-li"><i class="fa fa-home"></i> داشبورد </a>
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
        <a href="#"><i class="fa fa-message" class="a-in-li"></i>گزارش گیری</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>افزودن مدیر</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>تنظیمات قالب</a>
    </li>
    <li>
        <a href="../PHP/router/exit.php"><i class="fa fa-sign-out"></i> خروج از حساب </a>
    </li>
    </ul>

</section>