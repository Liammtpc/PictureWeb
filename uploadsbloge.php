<?php
$db = mysqli_connect("localhost", "root", "", "webpicture");
mysqli_query($db, "SET time_zone = '+3:30'");
mysqli_query($db, "SET CHARACTER SET 'utf8'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/all.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Liam</title>
</head>

<body>
    <div class="container">
        <main>
            <section class="panel">
                <div class="sideBar">
                    <span id="xMarkspanel" class="fa-regular fa-circle-xmark"></span>
                    <img src="Picture/sadarlastin.jpg" alt="" />
                    <nav>
                        <ul>
                            <li>
                                <a href=""><span class="fa-solid fa-gauge">داشبورد</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-user">پروفایل</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-add">اضافه کردن مقاله</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-bell">کنترل شفارشات</span></a>
                            </li>
                            <li>
                                <a href=""><span class="fa-solid fa-right-from-bracket">خروج</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="dashbords">
                    <span id="bars" class="fa-solid fa-bars"></span>
                   <section>
    <div class="profile">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="title">عنوان</label>
            <input type="text" id="title" placeholder="عنوان" name="Title">
            <label for="writer">نویسنده</label>
            <input type="text" id="writer" placeholder="نویسنده" name="Writer">
            <label for="date">تاریخ بارگذاری</label>
            <input type="text" id="date" placeholder="تاریخ بارگذاری" name="Date">
            <label for="dis">متن مقاله</label>
            <textarea name="Dis" id="dis" placeholder="متن مقاله"></textarea>
            <input type="file" id="flies" name="picture">
            <label for="flies" id="uplaods">بارگذاری عکس</label>
            <button type="submit" name="submit">ارسال</button>
        </form>
    </div>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = "";
    if (empty($_POST['Title'])) {
        $error = "عنوان مقاله الزامی است";
    }
    if (!isset($_FILES['picture']) || $_FILES['picture']['error'] !== UPLOAD_ERR_OK) {
        $error = "بارگذاری عکس الزامی است یا خطایی رخ داده است.";
    }
    if (empty($error)) {
        $Title = $_POST['Title'];
        $Writer = $_POST['Writer'];
        $Date = $_POST['Date'];
        $Dis = $_POST['Dis'];

        $target_dir = "picture/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
            echo "آپلود با موفقیت انجام شد.";
            $sql = "INSERT INTO discripton(Title, Writer, Date, Discripton, Picture) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($db, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $Title, $Writer, $Date, $Dis, $target_file);

            if (mysqli_stmt_execute($stmt)) {
                echo "اطلاعات با موفقیت در پایگاه داده ذخیره شد.";
            } else {
                echo "خطا در ذخیره سازی اطلاعات: " . mysqli_error($db);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "خطا در آپلود فایل.";
        }
    } else {
        echo $error;
    }
}
?>
                        <div class="titleinpanel">
                            <h2>مشاهده مقالات بارگذاری شده</h2>
                        </div>
                        <div class="GalleyandBloge">
                            <div class="lastBloge total">
                                <table>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عکس</th>
                                        <th>عنوان</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="Picture/picture1.png" alt="" /></td>
                                        <td>Html چیست؟</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="Picture/picture2.png" alt="" /></td>
                                        <td>js چیست؟</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="Picture/picture3.png" alt="" /></td>
                                        <td>CSS چیست؟</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>
</body>
<script src="Javascript/scroll.js"></script>
<script src="Javascript/panel.js"></script>

</html>