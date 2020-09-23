<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
?>

    <?php
        $allData = getAllMaterial();
    ?>

<div class="container">
<a class="btn btn-secondary pr-4 pl-4 mt-5 ml-2" href="dashboard.php">Back</a>
<div class="row mt-5">
    <?php foreach ($allData as $allmaterial){ ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mix <?php echo $allmaterial["filter"]; ?>">
            <div class="item text-center">
                <img src="../img/pdf.png" alt="pdf_img">
                <h3 class="mt-3 mb-2"><?php echo $allmaterial["subject"]?></h3>
                <p><?php echo $allmaterial["lecture_number"]?></p>
                <span class="pdf_size"><?php echo $allmaterial["space"]?></span>
                <span class="date"><?php echo "التاريخ : " . $allmaterial["date"]?></span>
                <span class="dr"><?php echo "د/ " . $allmaterial["doctor"]?></span>
                <button class="download"><a href="update_material_form.php?id=<?php echo $allmaterial["id"]?>">update</a></button>
                <button class="online"><a href="delete_form.php?id=<?php echo $allmaterial["id"]?>">delete </a></button>
            </div>
        </div>
    <?php } ?>
</div>
</div>