<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["b_name"]) && !empty($_POST["pages_num"]) && !empty($_POST["size"]) && !empty($_POST["download_times"]) && !empty($_POST["view_link"]) && !empty($_POST["img_src"]))
{
    $b_name = $_POST["b_name"];
    $page_num = $_POST["pages_num"];
    $size = $_POST["size"];
    $down_times = $_POST["download_times"];
    $view = $_POST["view_link"];
    $img_src = $_POST["img_src"];
    insert_book($b_name ,$page_num ,$size ,$down_times ,$view ,$img_src);
};
?>


<div class="container"> 
<h3 class="text-center mt-5 mb-3">welcome to dashboard</h3>
<p class="text-center">Here you can add new book</p>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-row">

        <div class="form-group col-md-12">
            <label>Book Name</label>
            <input style="direction: ltr;" name="b_name" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Number of Pages</label>
            <input style="direction: ltr;" name="pages_num" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Book Size</label>
            <input style="direction: ltr;" name="size" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Download Times</label>
            <input style="direction: ltr;" name="download_times" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Book Link</label>
            <input style="direction: ltr;" name="view_link" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Image Src</label>
            <input style="direction: ltr;" name="img_src" type="file" class="form-control">
        </div>
  </div>
  <button type="submit" class="btn btn-primary mb-5 mt-2">Add Item</button>
  <a class="btn btn-secondary pr-4 pl-4 ml-3 mb-5 mt-2" href="dashboard.php">Back</a>
</form>
</div>