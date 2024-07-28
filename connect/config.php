<?php

$servername = "127.0.0.1"; //localhost
$username = "root"; // نام کاربری MySQL
$password = "1234"; // رمز عبور MySQL
$dbname = "user_db"; // نام پایگاه داده

// اتصال به پایگاه داده
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال قطع شده است!: " . $conn->connect_error);
}
?>
