<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["c_name"]) && !empty($_POST["c_abbre"]) && !empty($_POST["description"]) && !empty($_POST["view"]) && !empty($_POST["less_no"]) && !empty($_POST["inst"]) && !empty($_POST["img"]) && !empty($_POST["filter"]) )
{
    $c_name = $_POST["c_name"];
    $c_abbre = $_POST["c_abbre"];
    $description = $_POST["description"];
    $view = $_POST["view"];
    $less_no = $_POST["less_no"];
    $inst = $_POST["inst"];
    $img = $_POST["img"];
    $filter = $_POST["filter"];
    insert_course($c_name ,$c_abbre ,$description ,$view ,$less_no ,$inst ,$img ,$filter);
};
?>


<div class="container"> 
<h3 class="text-center mt-5 mb-3">welcome to dashboard</h3>
<p class="text-center">Here you can add new Course</p>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-row">

        <div class="form-group col-md-12">
            <label>Course Name</label>
            <input style="direction: ltr;" name="c_name" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Course Abbreviation</label>
            <input style="direction: ltr;" name="c_abbre" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Course Description</label>
            <input style="direction: ltr;" name="description" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Course Link</label>
            <input style="direction: ltr;" name="view" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Number of Lessons</label>
            <input style="direction: ltr;" name="less_no" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Course instructor</label>
            <input style="direction: ltr;" name="inst" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Course Image</label>
            <input style="direction: ltr;" name="img" type="file" class="form-control">
        </div>
        <div class="form-group col-md-3 mb-3">
      <label for="validationCustom04">Course Type</label>
      <select class="custom-select"  name="filter" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option value="Programming">Programming language</option>
        <option value="Android">Android</option>
        <option value="Web_design">Web Design</option>
        <option value="Network">Network</option>
        <option value="Graphics">Graphics</option>
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary mb-5 mt-2">Add Item</button>
  <a class="btn btn-secondary pr-4 pl-4 ml-3 mb-5 mt-2" href="dashboard.php">Back</a>
</form>
</div>