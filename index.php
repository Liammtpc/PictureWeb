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
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="style.css" />
    <title>Title</title>
  </head>
  <body>
    <div class="tob-menu">
      <img src="picture/instagrams.png" alt="" />
      <img src="picture/telegram.png" alt="" />
      <img src="picture/whatsapp.png" alt="" /><img
        src=""
        alt=""
      />
    </div>
    <div class="continer">
               <nav id="menu2">
             <span id="close"><img src="picture/close.png" alt=""></span>
            <ul>
              <li><a href="">صفحه اصلی</a></li>
              <li><a href="">درباره ما</a></li>
              <li><a href="">تماس با ما</a></li>
              <li><a href="">محصولات</a></li>
            </ul>
          </nav>
      <header>
        <div class="empty"></div>
        <div class="sub-menu">
          <img src="picture/hamburger.png" alt="" id="hambur">
          <nav id="sectionMenu">
             <span id="visiablety"><img src="picture/close.png" alt=""></span>
            <ul id="menuHide">
              <li><a href="">صفحه اصلی</a></li>
              <li><a href="">درباره ما</a></li>
              <li><a href="">تماس با ما</a></li>
              <li><a href="">محصولات</a></li>
            </ul>
          </nav>
          <div class="logo" id="sectionMenu">
            <a href=""><img src="picture/logovina.png" alt="" /></a>
          </div>
          <div class="login" id="sectionMenu">
            <a href=""><img src="picture/login.png" alt="" /></a>
          </div>
        </div>
      </header>
      <main>
        <div class="banner">
          <div class="banner-content">
            <h1>تابلو سازی وینا</h1>
            <span
              >تابلوهایی که از دل پینترست بیرون میان فقط برای تو، اختصاصی طراحی
              می‌شوند</span
            >
            <a href="">سفارش تابلو<img src="picture/arrow.png" alt="" /></a>
          </div>
          <div class="banner-image">
            <img src="picture/banner.png" alt="" />
          </div>
        </div>
        <div class="about-Us">
          <div class="about-us-picture">
            <img src="picture/about.png" alt="" />
          </div>
          <div class="about-us-content">
            <h2>درباره ما</h2>
            <p>
              شرکت وینا سیستم، یک شرکت تابلو سازی با ارائه‌ی خدمات در حیطه‌های
              وب و اپلیکیشن است که برای اولین بار در سال 1390 شروع به کار کرد.
              این شرکت در طول فعالیت بیش از یک دهه‌‌ای خود توانسته که از فراز و
              نشیب‌های فراوانی عبور نماید. در ابتدای آغاز دهه‌ی 90، شرکت وستا
              سیستم، فعالیت خود را بر راه‌اندازی انواع استارت‌آپ‌ها متمرکز کرده
              بود. تقریبا در همان دوران بود که شرکت وستا سیستم توانست خود را در
              زمره‌ی اولین استارت‌آپ‌هایی قرار دهد که در زمینه‌ی خرید گروهی
              فعالیت می‌کنند.
            </p>
          </div>
        </div>
        <div class="gallery">
          <div class="gallery-title">
            <h2>نمونه کار</h2>
          </div>
          <img src="picture/picture1.png" alt="" />
          <img src="picture/picture2.png" alt="" />
          <img src="picture/picture3.png" alt="" />
          <img src="picture/picture4.png" alt="" />
          <a href="">
            <img src="picture/arrow.png" alt="" />
          </a>
        </div>
        <div class="quession">
          <div class="question-title">
            <h2>سوالات متداول</h2>
          </div>
          <div class="icon1">
            <img src="picture/question1.png" alt="" />
          </div>
          <div class="icon2">
            <img src="picture/question2.png" alt="" />
          </div>
          <details>
            <summary>قیمت تابلو چقدر هست؟</summary>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
              minima, repellat doloribus accusantium doloremque ab praesentium
              provident dolore itaque porro quas laborum tempore quaerat eos
              voluptatem beatae? Dolores, sint temporibus.
            </p>
          </details>
          <details>
            <summary>چطوری میشه از سایت سفارش داد؟</summary>
          </details>
          <details>
            <summary>آیا در صورت خرابی مرجوعی دارد؟</summary>
          </details>
        </div>
        <div class="contact">
          <div class="contact-content">
            <h2><img src="picture/envlope1.png" alt="" />ارتباط با ما</h2>
            <p>
              جهت ارتباط با تیم پشتیبانی ما، سوال در خصوص محصولات، نحوه سفارش
              محصولات و هر سوال دیگر از این طریق می‌توانید با ما ارتیاط بگیرید.
            </p>
            <div class="contact-content-bg">
              <img src="picture/envlope2.png" alt="" />
            </div>
          </div>
          <?php
          $ok=false;
          $error="";
          if(isset($_POST['User'])){
              $user=$_POST['User'];
              $Eamil=$_POST['Email'];
              $Dis=$_POST['Dis'];
               if ($user == "") {
                    echo $error = '<span style="color:red;">نام کاربری را وارد نمایید</span>';
                    $ok = false;
                }
                if ($Eamil == "") {
                    echo "<br/>";
                    echo $error = '<span style="color:red;> شماره تلفن کاربر را وارد نمایید</span>';
                    $ok = false;
                }
                if ($error == "") {
                    $ok = true;
                }
                if ($ok == true) {
                    $insertRequest=mysqli_query($db,"insert into requestuesr (Username,Email,Discription)values('$user','$Eamil','$Dis')");
                    echo '<p style="color:green;">اطلاعات شما جهت تماس با موفقیت ثبت گردید</p>';
                }
          }
          ?>
          <form action="#" method="post">
            <input type="text" name="User" placeholder="نام کاربری" />
            <input type="text" name="Email" placeholder="ایمیل یا شماره موبایل" />
            <textarea name="Dis" id="" placeholder="توضیحات"></textarea>
            <button type="submit">
              ارسال پیام<img src="picture/arrow.png" alt="" />
            </button>
          </form>
        </div>
      </main>
      <footer>
        <div class="about">
          <div class="about-title">
            <img src="picture/logovina.png" alt="" />
            <h2>وینا</h2>
          </div>
          <p>
            شرکت وینا سیستم، یک شرکت تابلو سازی با ارائه‌ی خدمات در حیطه‌های وب
            و اپلیکیشن است که برای اولین بار در سال 1390 شروع به کار کرد. این
            شرکت در طول فعالیت بیش از یک دهه‌‌ای خود توانسته که از فراز و
            نشیب‌های فراوانی عبور نماید. در ابتدای آغاز دهه‌ی 90، شرکت وستا
            سیستم، فعالیت خود را بر راه‌اندازی انواع استارت‌آپ‌ها متمرکز کرده
            بود.
          </p>
          <div class="social">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
          </div>
        </div>
        <div class="link">
          <div class="link-title">
            <h2>دسترسی سریع</h2>
          </div>
                 <nav>
            <ul>
              <li><a href="">صفحه اصلی</a></li>
              <li><a href="">درباره ما</a></li>
              <li><a href="">تماس با ما</a></li>
              <li><a href="">محصولات</a></li>
            </ul>
          </nav>
        </div>
        <div class="contacts">
            <div class="contacts-title">
              <h2>تماس با ما</h2>
            </div>
            <span><img src="picture/phone.png" alt="">09180009364</span>
            <span><img src="picture/envlope.png" alt="">mtpc9776@gmail.com</span>
            <span><img src="picture/location.png" alt="">کرمانشاه، سنقر، خیابان بهشتی، کوچه مهدوی، پلاک 17</span>
            <div class="valids">
              <img src="picture/enamd.png" alt="">
              <img src="picture/etejard.png" alt="">
              <img src="picture/cards.png" alt="">
            </div>
        </div>
        <div class="up">
          <img src="picture/up.png" alt="">
        </div>
      </footer>
    </div>
  </body>
  <script src="Javascript/js.js"></script>
</html>
