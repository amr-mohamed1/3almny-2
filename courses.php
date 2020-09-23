<?php
    $page_name = "علمني | الكورسات";
    $style = "courses_style.css";
    $script="courses_main.js";
    require_once "init.php";
?>
<div class="navigation_bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img src="img/Untitled-3%20(3).png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">الرئيسيه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="material.php">المواد الدراسيه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="courses.php">كورسات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="books.php">كتب ومراجع</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><img src="img/office_work_.png" alt="office_work"></div>
                <div class="col-lg-6 text-center">
                    <img class="header_logo" src="img/reading.png" alt="reading">
                    <h3>اهلا بيك في الكورسات</h3>
                    <p>هنا هتلاقي كورسات كتير في مجالات مختلفه زي تصميم المواقع و تصميم تطبيقات الهاتف و غيرها من الكوسات الي هتساعدك في اختيار و تعلم مجال شغلك في المستقبل</p>
                    <button class="start_button">يلا نبدا</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content text-center">
        <div class="container">
            <h2>علمني | كورسات اونلاين</h2>
            <div class="bar"></div>
            <p class="intro">اختار تراك من ضمن التراكات الي موجوده او دور علي الكورس الي انت عايزه</p>

            <!-- mix it up list -->

            <div class="list">
                <ul>
                    <li class="upper active" data-filter="all">ALL</li>
                    <li class="filter" data-filter=".Programming">Programming language</li>
                    <li class="filter" data-filter=".Android">Android</li>
                    <li class="filter" data-filter=".Web_design">Web design</li>
                    <li class="filter" data-filter=".Network">Network</li>
                    <li class="filter" data-filter=".Graphics">Graphics</li>
                </ul>
            </div>

                    <?php
                        $allData = getAllCourses();
                    ?>

            <div class="row">
                
            <?php foreach ($allData as $allCourses){ ?>
                <!-- html -->

                <div class="col-lg-4 col-md-6 col-sm-12 mix <?php echo $allCourses["filter"]?>">
                    <div class="item">
                        <img src="<?php echo "img/" . $allCourses["img_src"]?>" alt="html_img">
                        <h2 style="direction: ltr;"><?php echo $allCourses["course"]?></h2>
                        <p><?php echo $allCourses["course_name"]?></p>
                        <p><?php echo $allCourses["description"]?></p>
                        <button><a href="<?php echo $allCourses["view_link"]?>">ابدأ الأن</a></button>
                        <p class="instractor"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm6.854.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            </svg><?php echo "م/ " . $allCourses["instructor"]?></p>
                        <p class="lesson_number"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-patch-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            </svg><?php echo $allCourses["lessons_number"] . "  " . "درس"?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- scroll to top -->

    <div class="scroll"><abbr title="press to scroll to top"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
                <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg></abbr></div>


    <!-- start footer -->
    <div class="footer text-center">
        <div class="container">
            <p>All Rights Reserved &copy; 2020 <a href="https://amr-mohamed1.github.io/my-portfolio/
">Amr Mohamed</a></p>
        </div>
    </div>
    <!-- end footer-->




    <!-- loading -->
    <div class="loading">
        <div class="cssloader">
            <div class="sh1"></div>
            <div class="sh2"></div>
            <h4 class="lt">loading</h4>
        </div>
    </div>