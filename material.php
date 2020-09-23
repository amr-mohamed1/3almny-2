<?php
    $page_name = "علمني | المواد الدراسيه";
    $style = "matirial_style.css";
    $script="main_material.js";
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
                            <a class="nav-link active" href="material.php">المواد الدراسيه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">كورسات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="books.php">كتب ومراجع</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- start headrer -->
    <div class="header"></div>
    <!-- end heaer -->

    <!-- start content -->
    <div class="content text-center">
        <div class="container">
            <h3>المواد الدراسيه</h3>
            <div class="bar"></div>
            <p>هنا هتلاقي كل المواد الدراسيه الي انت محتاجها .. كل الي عليك انك تختار الماده و تشوف المحاضره الي انت محتاجها و تختار انك تحملها او تشوفها اونلاين</p>

            <div class="list text-center">
                <div class="container">
                    <ul>
                        <li class="upper active" data-filter="all">all the material</li>
                        <li class="filter" data-filter=".oop">OOP</li>
                        <li class="filter" data-filter=".Ethics">Ethics</li>
                        <li class="filter" data-filter=".Math">Math</li>
                        <li class="filter" data-filter=".File_Organization">File Organization</li>
                        <li class="filter" data-filter=".statistical_analysis">Statistical Analysis</li>
                        <li class="filter" data-filter=".Operations_Research">Operations Research</li>
                    </ul>
                </div>

                <!-- start get all data function -->
                    <?php
                        $allData = getAllMaterial();
                    ?>


                <!--                            material                            -->
                <div class="row">
                    <?php foreach ($allData as $allmaterial){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mix <?php echo $allmaterial["filter"]; ?>">
                        <div class="item">
                            <img src="img/pdf.png" alt="pdf_img">
                            <h3><?php echo $allmaterial["subject"]?></h3>
                            <p><?php echo $allmaterial["lecture_number"]?></p>
                            <span class="pdf_size"><?php echo $allmaterial["space"]?></span>
                            <span class="date"><?php echo "التاريخ : " . $allmaterial["date"]?></span>
                            <span class="dr"><?php echo "د/ " . $allmaterial["doctor"]?></span>
                            <button class="download"><a href="<?php echo $allmaterial["download_link"]?>" target="_blank"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z" />
                                        <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z" />
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z" />
                                    </svg> حمل المحاضره </a></button>
                            <button class="online"><a href="<?php echo $allmaterial["view_link"]?>" target="_blank"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg> شوفها اونلاين </a></button>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- start footer -->
    <div class="footer text-center">
        <div class="container">
            <p>All Rights Reserved &copy; 2020 <a href="https://amr-mohamed1.github.io/my-portfolio/
">Amr Mohamed</a></p>
        </div>
    </div>
    <!-- end footer-->



    <!-- scroll to top -->

    <div class="scroll"><abbr title="press to scroll to top"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
                <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg></abbr></div>


    <!-- loading -->
    <div class="loading">
        <div class="cssloader">
            <div class="sh1"></div>
            <div class="sh2"></div>
            <h4 class="lt">loading</h4>
        </div>
    </div>