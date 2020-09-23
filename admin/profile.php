<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
?>

<h3 class="text-center mt-5 mb-3">welcome to dashboard</h3>
<p class="text-center">Here you can see your personal information *VIEW ONLY*</p>


<div class="container">
<form>
  <div class="form-row mt-5">
    <div class="mb-4 form-group col-md-6">
                  <label>User Name</label>

    <input class="form-control" type="text" placeholder="<?php echo  $_SESSION['userName'] ?>" readonly>
  </div>
    <div class="mb-4 form-group col-md-6">
                  <label>User ID</label>

    <input class="form-control" type="text" placeholder="<?php echo  $_SESSION['userId'] ?>" readonly>
  </div>
    <div class="mb-4 form-group col-md-6">
                  <label>User Email</label>

    <input class="form-control" type="text" placeholder="<?php echo  $_SESSION['userEmail'] ?>" readonly>
  </div>
    <div class="mb-4 form-group col-md-6">
                  <label>Gnder</label>

    <input class="form-control" type="text" placeholder="<?php echo  $_SESSION['gender'] ?>" readonly>
  </div>
    <div class="mb-4 form-group col-md-6">
                  <label>Phone Number</label>

    <input class="form-control" type="text" placeholder="<?php echo  $_SESSION['userPhone'] ?>" readonly>
  </div>
  </div>
</form>
<a class="btn btn-secondary pr-4 pl-4 mt-5 ml-2" href="dashboard.php">Back</a>

</div>