<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        $book_id = $_GET['id'];
            if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["b_name"]) && !empty($_POST["view_link"]) )
            {
                $b_name = $_POST["b_name"];
                $page_num = $_POST["pages_num"];
                $size = $_POST["size"];
                $down_times = $_POST["download_times"];
                $view = $_POST["view_link"];
                $img_src = $_POST["img_src"];
                update_books($book_id ,$b_name ,$page_num ,$size ,$down_times ,$view ,$img_src);
            }
            $result = getBooks_with_id($book_id);

?>



<div class="container"> 
<h3 class="text-center mt-5 mb-3">welcome to dashboard</h3>
<p class="text-center">Here you can add new Course</p>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-row">

        <div class="form-group col-md-12">
            <label>Book Name</label>
            <input style="direction: ltr;" name="b_name" value="<?php echo $result['book_name'] ?>" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Number of Pages</label>
            <input style="direction: ltr;" name="pages_num" value="<?php echo $result['pages_number'] ?>" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Book Size</label>
            <input style="direction: ltr;" name="size" value="<?php echo $result['size'] ?>" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Download Times</label>
            <input style="direction: ltr;" name="download_times" value="<?php echo $result['download_times'] ?>" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Book Link</label>
            <input style="direction: ltr;" name="view_link" value="<?php echo $result['view_link'] ?>" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Image Src</label>
            <input style="direction: ltr;" name="img_src" type="file" class="form-control">
        </div>
  </div>
  <button type="submit" class="btn btn-primary mb-5 mt-2">Add Item</button>
  <a class="btn btn-secondary pr-4 pl-4 ml-3 mb-5 mt-2" href="update_books.php">Back</a>
</form>
</div>




<?php     }
else{
    header("location:dashboard.php");
} ?>