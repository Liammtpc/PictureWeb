<?php
$db = mysqli_connect("localhost", "root", "", "mypersonal");
mysqli_query($db, "SET time_zone = '+3:30'");
mysqli_query($db, "SET CHARACTER SET 'utf8'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="style.css" />
    <title>title</title>
</head>

<body>
    <div class="logins">
        <form action="" method="post">
            <h2>ورود به پنل</h2>
            <input type="text" name="user" placeholder="نام کاربری" id="name">
            <input type="text" name="pass" placeholder="رمز عبور" id="pass">
            <button type="submit" onclick="send()" id="btn">ورود<img src="picture/arrow.png" alt=""></button>
        </form>
    </div>
</body>
    <script src="Javascript/ajax.js"></script>
</html>