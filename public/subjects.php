<?php
include_once("../config/config.php");
include_once("../src/libs/connection.php");
include_once("../src/libs/subjects.php");



?>


<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>المواد الدراسية</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../src/inc/css/subject.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../src/inc/css/custom.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <section class="dark">
        <div class="container py-4">
            <h1 class="h1 text-center C_AR" id="pageHeaderTitle">المواد</h1>

            <!-- Subject #1 -->
            <article class="postcard dark blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="../media/subjects/STAT_337.png" alt="احص 337" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title blue C_rtl C_center"><a href="#" class="C_AR C_bold">تصميم وتحليل
                            التجارب</a>
                    </h1>
                    <div class="postcard__subtitle medium C_rtl C_AR C_center">
                        احص 337
                    </div>

                    <!-- Line -->
                    <div style="justify-content: center; display: flex;">
                        <div class="postcard__bar"></div>
                    </div>

                    <div class="postcard__preview-txt C_rtl C_RIGHT C_AR">

                        يهتم المقرر باستعراض أساسيات الاستدلال الإحصائي، المبادئ الرئيسية للتصميم التجريبي (التكرار –
                        العشوائية - القطاعات، مقارنات التجارب البسيطة).
                        <br>
                        <span class="C_bold">تجارب عامل واحد</span>: التصميم تام العشوائية - المتضادات والمتضادات
                        المتعامدة - مقارنة أزواج من
                        متوسطات المعالجات.
                        <br>
                        <span class="C_bold">تصاميم القطاعات العشوائية</span>: تصميم القطاع العشوائي التام - تصميم
                        المربع الالتيني - تصميم المربع
                        الالتيني الإغريقي.
                    </div>
                    <ul class="postcard__tagbox C_tags">
                        <li class="tag__item C_tag">مواد اجبارية</i></li>
                        <li class="tag__item C_tag" dir="rtl">3 ساعات <i class="fas fa-clock mr-2"></i>
                        <li class="tag__item C_tag"><i class="fas fa-book-open mr-2"></i>المستوى السادس</li>
                        <li class="tag__item play blue C_tag">
                            <a href="#"><i class="fas fa-layer-group mr-2 "></i>أضغط هنا للذهاب إلى محتويات المادة</a>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="postcard dark red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="../media/subjects/STAT_335.png" alt="احص 335" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title red C_rtl C_center"><a href="#" class="C_AR C_bold">نماذج خطية
                            معممة</a>
                    </h1>
                    <div class="postcard__subtitle medium C_rtl C_AR C_center">
                        احص 335
                    </div>

                    <!-- Line -->
                    <div style="justify-content: center; display: flex;">
                        <div class="postcard__bar"></div>
                    </div>

                    <!-- <div class="postcard__bar"></div> -->
                    <div class="postcard__preview-txt">
                        To introduce the theoretical and applied concepts and principles of generalized linear models to
                        the students.
                        <br>
                        This will help them in how to select the appropriate model and how to analyze the
                        data.
                    </div>
                    <ul class="postcard__tagbox C_tags">
                        <li class="tag__item C_tag">مواد اجبارية</i></li>
                        <li class="tag__item C_tag" dir="rtl">3 ساعات <i class="fas fa-clock mr-2"></i>
                        <li class="tag__item C_tag"><i class="fas fa-book-open mr-2"></i>المستوى السادس</li>
                        <li class="tag__item play red C_tag">
                            <a href="#"><i class="fas fa-layer-group mr-2 "></i>أضغط هنا للذهاب إلى محتويات المادة</a>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="postcard dark green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="../media/subjects/OPR213.png" alt="بحث 213" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title green C_rtl C_center"><a href="#" class="C_AR C_bold">برمجة خطية</a>
                    </h1>
                    <div class="postcard__subtitle medium C_rtl C_AR C_center">
                        بحث 213
                    </div>
                    
                    <!-- Line -->
                    <div style="justify-content: center; display: flex;">
                        <div class="postcard__bar"></div>
                    </div>

                    <div class="postcard__preview-txt C_rtl C_RIGHT C_AR">تعريف وصياغة مسائل البرمجة الخطية - الحل البياني - مراجعة للجبر الخطي ولتحليل التحدب - جبر طريقة السمبلكس - طريقة السمبلكس الجدولية - طريقة السمبلكس المعدلة - نظرية الثنوية والتفسير الاقتصادي للمسألة الثنوية - تحليل الحساسية - بعض تطبيقات البرمجة الخطية</div>
                    <ul class="postcard__tagbox C_tags">
                        <li class="tag__item C_tag">مواد اختيارية</i></li>
                        <li class="tag__item C_tag" dir="rtl">4 ساعات <i class="fas fa-clock mr-2"></i></li>
                        <li class="tag__item C_tag"><i class="fas fa-book-open mr-2"></i>المستوى الرابع وأكثر</li>
                        <li class="tag__item play green C_tag">
                            <a href="#"><i class="fas fa-layer-group mr-2 "></i>أضغط هنا للذهاب إلى محتويات المادة</a>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="postcard dark green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus
                        eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat
                        vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis
                        enim quidem excepturi, illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play green">
                            <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark yellow">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus
                        eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat
                        vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis
                        enim quidem excepturi, illum quos!</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play yellow">
                            <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </section>

    <!-- partial -->

</body>

</html>