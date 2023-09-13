<table class="all-table">
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
    <th>مذهب</th>
    <th>آدرس</th>
    <th>تاریخ ورود</th>
    <th>تاریخ ترخیص</th>
    <th>پذیرش قبلی</th>
    <th>نام مسـًول</th>
    <th>نام تحویل دهنده</th>
</tr>
<?php
    if ($run_query->num_rows > 0) {
            for ($i = 0 ; $i <= $run_query->num_rows ; $i++) {
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
                echo "<td>" . $row["mazhab"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["logdate"] . "</td>";
                echo "<td>" . $row["outdate"] . "</td>";
                echo "<td>" . $row["dublelog"] . "</td>";
                echo "<td>" . $row["adminname"] . "</td>";
                echo "<td>" . $row["policename"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo "<td colspan='19'>اطلاعاتی وجود ندارد</td>";
            echo "</tr>";
        }
?>
</table>