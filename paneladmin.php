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
        <span id="hampanel"><img src="picture/hamburger.png" alt=""></span>
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
                  <a href=""
                    ><span class="fa-solid fa-add">اضافه کردن مقاله</span></a
                  >
                </li>
                <li>
                  <a href=""
                    ><span class="fa-solid fa-bell">کنترل شفارشات</span></a
                  >
                </li>
                <li>
                  <a href="loginout.php"
                    ><span class="fa-solid fa-right-from-bracket">خروج</span></a
                  >
                </li>
              </ul>
            </nav>
          </div>
          <div class="dashbords">
            <span id="bars" class="fa-solid fa-bars"></span>
            <section>
         <div class="titleinpanel">
                            <h2>مشاهده</h2>
                            <p>
                                آخرین مقالات و نمونه بارگذاری شده در این سایت در این بخش
                                مشاهده کنید.
                            </p>
                        </div>
                        <div class="GalleyandBloge">
                            <div class="lastBloge">
                                <table>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عکس</th>
                                        <th>عنوان</th>
                                    </tr>
                                    <?php
                                    $showbloge = mysqli_query($db, "select*from discripton ORDER BY Title DESC LIMIT 3");
                                    while ($rowshowbloge = mysqli_fetch_array($showbloge)) {
                                        echo '
                                            <tr>
                                            <td>1</td>
                                            <td><img src="' . $rowshowbloge["Picture"] . '" alt="" /></td>
                                            <td>' . $rowshowbloge["Title"] . '</td>
                                            </tr>    
                                            ';
                                    }
                                    ?>
                                </table>
                            </div>
                    </section>
                    <section>
                        <div class="titleinpanel">
                            <h2>مشاهده سفارشات</h2>
                            <p>جهت دریافت سفارشات اخیر مشتریان و مشاهد اطلاعات</p>
                            <div class="orderCustomer">
                                <table>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام شخص</th>
                                        <th>عنوان</th>
                                        <th>شماره تلفن</th>
                                        <th>توضیحات</th>
                                    </tr>
                                    <?php
                                    $showOrder = mysqli_query($db, "select*from orders ORDER BY Title DESC LIMIT 3");
                                    while ($rowShowOrder = mysqli_fetch_array($showOrder)) {
                                        echo '
                                            <tr>
                                                <td>1</td>
                                                <td>' . $rowShowOrder["Username"] . '</td>
                                                <td>' . $rowShowOrder["Title"] . '</td>
                                                <td>' . $rowShowOrder["Number"] . '</td>
                                                <td>' . $rowShowOrder["Discription"] . '</td>
                                            </tr>    
                                            ';
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
          </div>
        </section>
      </main>
    </div>
  </body>
  <script src="Javascript/panel.js"></script>
</html>
