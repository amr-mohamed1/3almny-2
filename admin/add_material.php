<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["subject"]) && !empty($_POST["lec_no"]) && !empty($_POST["space"]) && !empty($_POST["view"]) && !empty($_POST["download"]) && !empty($_POST["date"]) && !empty($_POST["doc"]) && !empty($_POST["filter"]) )
{
    $sub = $_POST["subject"];
    $lec_no = $_POST["lec_no"];
    $space = $_POST["space"];
    $view = $_POST["view"];
    $download = $_POST["download"];
    $date = $_POST["date"];
    $doc = $_POST["doc"];
    $filter = $_POST["filter"];
    insert_material($sub ,$lec_no ,$space ,$view ,$download ,$date ,$doc ,$filter);
}
?>


<div class="container"> 
<h3 class="text-center mt-5 mb-3">welcome to dashboard</h3>
<p class="text-center">Here you can add new Material</p>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-row">
  <div class="form-group col-md-3 mb-3">
      <label for="validationCustom04">Enter subject code</label>
      <select class="custom-select"  name="subject" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option value="OOP">oop</option>
        <option value="Ethics">Ethics</option>
        <option value="Math">Math</option>
        <option value="File Organization">File Organization</option>
        <option value="statistical analysis">statistical analysis</option>
        <option value="Operations Research">Operations Research</option>
      </select>
    </div>
        <div class="form-group col-md-12">
            <label>lecture Number</label>
            <input style="direction: ltr;" name="lec_no" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>file space</label>
            <input style="direction: ltr;" name="space" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Enter view Link</label>
            <input style="direction: ltr;" name="view" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Enter download Link</label>
            <input style="direction: ltr;" name="download" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Enter date</label>
            <input style="direction: ltr;" name="date" type="date" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Enter Doctor Name</label>
            <input style="direction: ltr;" name="doc" type="text" class="form-control">
        </div>
        <div class="form-group col-md-3 mb-3">
      <label for="validationCustom04">Enter subject code</label>
      <select class="custom-select"  name="filter" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option value="oop">oop</option>
        <option value="Ethics">Ethics</option>
        <option value="Math">Math</option>
        <option value="File_Organization">File_Organization</option>
        <option value="statistical_analysis">statistical_analysis</option>
        <option value="Operations_Research">Operations_Research</option>
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Add Item</button>
  <a class="btn btn-secondary pr-4 pl-4 ml-3" href="dashboard.php">Back</a>
</form>
</div>