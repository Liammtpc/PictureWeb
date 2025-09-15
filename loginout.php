<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "mypersonal");
mysqli_query($db, "SET time_zone = '+3:30'");
mysqli_query($db, "SET CHARACTER SET 'utf8'");
$_SESSION['email'] = '';

echo '<meta http-equiv="refresh" content="0; url=login.php"> ';
