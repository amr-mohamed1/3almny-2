<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
?>

<?php
                        $allData = getAllCourses();
                    ?>

<div class="container">
<a class="btn btn-secondary pr-4 pl-4 mt-5 ml-2" href="dashboard.php">Back</a>
<div class="row text-center mt-5">
    <?php foreach ($allData as $allCourses){ ?>
                <div class="col-md-6 col-sm-12 mix <?php echo $allCourses["filter"]?>">
                    <div class="item">
                        <img src="<?php echo "../img/" . $allCourses["img_src"]?>" alt="html_img">
                        <h2 style="direction: ltr;"><?php echo $allCourses["course"]?></h2>
                        <p><?php echo $allCourses["course_name"]?></p>
                        <p><?php echo $allCourses["description"]?></p>
                        <p class="instractor">
                        <?php echo "م/ " . $allCourses["instructor"]?></p>
                        <p class="lesson_number"><?php echo $allCourses["lessons_number"] . "  " . "درس"?></p>
                        <button class="download mt-4 mr-3"><a href="update_courses_form.php?id=<?php echo $allCourses["id"]?>">update</a></button>
                <button class="online"><a href="delete_form.php?id=<?php echo $allCourses["id"]?>">delete </a></button>
                    </div>
                </div>
                <?php } ?>
                </div>
</div>
            </div>