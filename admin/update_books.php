<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
?>

<?php
                        $allData = getAllBooks();
                    ?>

<div class="container">
<a class="btn btn-secondary pr-4 pl-4 mt-5 ml-2" href="dashboard.php">Back</a>
<div class="row text-center mt-5">
    <?php foreach ($allData as $allBooks){ ?>
        <div class="col-lg-6 col-md-12 col-sm-12 mix Web_design Programming">
                    <div class="item">
                        <img src="<?php echo "../img/" . $allBooks["img_src"]?>" alt="book">
                        <h4 class="mt-4 mb-4"><?php echo $allBooks["book_name"]?></h4>
                        <p><span class="page_number">Pages Number: <?php echo $allBooks["pages_number"]?> <span class="span_style">Pages</span></span><br><span class="size">size: <?php echo $allBooks["size"]?> <span class="span_style">MB</span> </span><br><span class="downloads mb-3">Download: <?php echo $allBooks["download_times"]?> <span class="span_style">Time</span></span></p>
                        <button class="download mt-2 mr-3"><a href="update_books_form.php?id=<?php echo $allBooks["id"]?>">update</a></button>
                <button class="online ml-2"><a href="delete_form.php?id=<?php echo $allBooks["id"]?>">delete </a></button>                    </div>
                </div>
                <?php } ?>
                </div>
</div>
            </div>