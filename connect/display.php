<?php
include 'config.php';
$sql = "SELECT *FROM users  ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست کاربران قایل نمایش. </title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body style="background-color: #fff;">

<h2 style="text-align: center;">لیست کاربران ثبت‌نام شده</h2>

<table>
    <tr style="text-align: center;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">نام</th>
        <th style="text-align: center;">نام خانوادگی</th>
        <th style="text-align: center;">نام پدر</th>
        <th style="text-align: center;">ایمیل</th>
        <th style="text-align: center;">شماره تلفن</th>
        <th style="text-align: center;">کد ملی</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["father_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["national_code"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='7'>هیچ کاربری ثبت نشده است.</td></tr>";
    } 
    ?>

</table>

<?php $conn->close(); ?>
</body>
</html>