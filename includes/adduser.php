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
        <td id="icn2"><i class="fa fa-user-plus" aria-hidden="true"><input onclick="createrow()" name="submit" type="submit" value="افزودن مدد جو"></td>
        <td><i class="fa fa-trash" aria-hidden="true"><button type="reset">پاک کردن فرم</button></td>
    </tr>
    </table>

</form>