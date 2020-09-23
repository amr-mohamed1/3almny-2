<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["n_pass"]))
{
    $user_name = $_POST["u_name"];
    $pass = $_POST["n_pass"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    updateUser($_SESSION['userId'], $user_name , $pass , $phone , $email);
};
?>

<div class="container">
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-row mt-5 pt-5">
        <div class="form-group col-md-12">
            <label>New User NAME</label>
            <input style="direction: ltr;" name="u_name" value="<?php echo $_SESSION['userName'] ?>" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>New password</label>
            <input style="direction: ltr;" name="n_pass" type="password" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>New Phone</label>
            <input style="direction: ltr;" name="phone" value="<?php echo $_SESSION['userPhone'] ?>" type="tele" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>New Email</label>
            <input style="direction: ltr;" name="email" value="<?php echo $_SESSION['userEmail'] ?>" type="email" class="form-control">
        </div>
  </div>
  <button type="submit" class="btn btn-primary mb-5 mt-2">Add Item</button>
  <a class="btn btn-secondary pr-4 pl-4 ml-3 mb-5 mt-2" href="dashboard.php">Back</a>
</form>
</div>