<?php
include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $fatherName = htmlspecialchars($_POST['father_name']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['phone_number']);
    $nationalCode = htmlspecialchars($_POST['national_code']);

    $sql = "INSERT INTO users (first_name, last_name, father_name, email, phone_number, national_code)
            VALUES ('$firstName', '$lastName', '$fatherName', '$email', '$phoneNumber', '$nationalCode')";

    if ($conn->query($sql) === TRUE) {
        echo "ثبت نام با موفقیت انجام شد!";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام</title>
    <!--من css شخصی سازی شده معرفی کردم.-->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            transition: background-color 0.5s, color 0.4s;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.5s, color 0.3s;
        }

        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 15px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .toggle-theme {
            margin-bottom: 20px;
        }

        /* Dark Mode Styles */
    body.dark-mode {
        background-color: #444;
        color: #ddd;
    }

    .form-container.dark-mode {
        background-color: #212121;

    }

    body.dark-mode input[type="text"],
    body.dark-mode input[type="email"],
    body.dark-mode input[type="tel"] {
        border-color: #777;
        background-color: #666;
        color: #fff;

    }
    
    </style>

</head>
<body>

<div style="color: #ddd;" class="form-container">
    <h2 style="color: green; text-align: center; font-size: 50px;">فرم ثبت نام</h2>
    <div style="float: center;" align="center" class="toggle-theme">
        <button id="theme-toggle">تغییر تم</button>
    </div>
    <form method="post" action="">
        <input  type="text" name="first_name" placeholder="نام" required>
        <input type="text" name="last_name" placeholder="نام خانوادگی" required>
        <input type="text" name="father_name" placeholder="نام پدر" required>
        <input type="email" name="email" placeholder="ایمیل" required>
        <input type="tel" name="phone_number" placeholder="شماره تلفن" required>
        <input type="text" name="national_code" placeholder="کد ملی" required>
        <button type="submit">ثبت</button>
    </form>
    
</div>

<script src="turn.js"></script>
</body>
</html>
