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
     <?php
                $error = "";
                $ok = false;
                if (isset($_POST["Username"])) {
                    $Username = $_POST["Username"];
                    $Email = $_POST["Email"];
                    $Password = $_POST["Password"];
                    if (empty($Username)) {
                        $error = "نام کاربری خود را واردکنید.";
                        $ok = false;
                    }
                    if (empty($Email)) {
                        $error = "ایمیل  خود را واردکنید.";
                        $ok = false;
                    }
                    if (empty($Password)) {
                        $error = " رمز خود را واردکنید.";
                        $ok = false;
                    }
                    if ($error == "") {
                        $ok = true;
                    }
                    if ($ok == true) {
                        $insertBloge = mysqli_query($db, "INSERT INTO user(Username,Email,Password)VALUES('$Username',' $Email','$Password')");
                        echo '<meta http-equiv="refresh" content="2; url=paneladmin.php"> ';
                    }
                }

                ?>
    <div class="logins">
        <form action="" method="post">
            <h2>ثبت نام</h2>
            <input type="text" name="Username" placeholder="نام کاربری">
            <input type="text" name="Email" placeholder="ایمیل یا شماره موبایل">
            <input type="text" name="Password" placeholder="رمز عبور">
            <button type="submit">ثبت نام<img src="picture/arrow.png" alt=""></button>
        </form>
    </div>
    <?php
        if ($ok == true) {
        echo '<div Id="error">ورود با موفقیت انجام شد.</div>';
    }
    ?>
</body>
</html>