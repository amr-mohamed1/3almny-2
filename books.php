<?php
    $page_name = "علمني | الكتب والمراجع";
    $style = "books.css";
    $script="books.js";
    require_once "init.php";
?>
<!-- hero section -->

    <div class="header">
        <div class="overlay">
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
                                    <a class="nav-link" href="courses.php">كورسات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="books.php">كتب ومراجع</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center hero-cont">
                        <img src="img/%D9%83%D8%AA%D8%A8.png" alt="welcome_img">
                        <h3>اهلا بيك في مكتبة علمني</h3>
                        <p>هنا هتلاقي الكتب الي هتساعدك انك تتعلم لغات البرمجه و كمان هتلاقي المراجع الي هتساعدك في دراستك الجامعيه من اكتر من مصدر وكمان الكتب الي واخده تقييم كويس</p>
                        <button class="start">يلا نبدا</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- popular section -->


    <div class="popular text-center">
        <div class="overlay">
            <h3>اقتراحات لاهم الكتب</h3>
            <div class="bar"></div>
            <p>هنا هنرشحلك مجموعة من الكتب الي تعتبر من اشهر الكتب علي موقع pdf driver و كمان الكتب صاحبة اكتر عدد تحميلات ف كل مجالات البرمجه</p>
            <div class="container">
                <div class="owl-carousel owl-theme">

                    <div class="item"><img src="img/p1.jpg" alt="book1"></div>
                    <div class="item"><img src="img/p2.jpg" alt="book2"></div>
                    <div class="item"><img src="img/p3.jpg" alt="book3"></div>
                    <div class="item"><img src="img/p4.jpg" alt="book4"></div>
                    <div class="item"><img src="img/p5.jpg" alt="book5"></div>
                    <div class="item"><img src="img/p6.jpg" alt="book6"></div>
                    <div class="item"><img src="img/p7.jpg" alt="book7"></div>
                    <div class="item"><img src="img/p8.jpg" alt="book8"></div>
                    <div class="item"><img src="img/p9.jpg" alt="book9"></div>
                    <div class="item"><img src="img/p10.jpg" alt="book10"></div>

                </div>
            </div>
        </div>
    </div>


    <!-- popular section -->


    <div class="content text-center">
        <div class="container">
            <h3>علمني | المكتبة</h3>
            <div class="bar"></div>
            <p> هنا هتلاقي مجموعة من الكتب الي تقدر تشوفها اونلاين او تحملها و الي هتساعدك في تعلم لغات برمجه و مهارات جديدة هتفيدك في شغلك وكمان كتب هتساعدك في فهم المواد بتاعتك وكمان تطور نفسك في المواد دي</p>
            
                <!-- start get all data function -->
                <?php
                        $allData = getAllBooks();
                ?>
            
            <div class="row">

            <?php foreach ($allData as $allBooks){ ?>

                <div class="col-lg-6 col-md-12 col-sm-12 mix Web_design Programming">
                    <div class="item">
                        <img src="<?php echo "img/" . $allBooks["img_src"]?>" alt="book">
                        <h4><?php echo $allBooks["book_name"]?></h4>
                        <p><span class="page_number">Pages Number: <?php echo $allBooks["pages_number"]?> <span class="span_style">Pages</span></span><br><span class="size">size: <?php echo $allBooks["size"]?> <span class="span_style">MB</span> </span><br><span class="downloads">Download: <?php echo $allBooks["download_times"]?> <span class="span_style">Time</span></span></p>
                        <button><a href="<?php echo $allBooks["view_link"]?>">شوف الكتاب</a></button>
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


    <!-- loading page -->
    <div class="loading">
        <div class="cssloader">
            <div class="sh1"></div>
            <div class="sh2"></div>
            <h4 class="lt">loading</h4>
        </div>
    </div>