<?php
    $page_name = "sign up";
    require_once "init.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["user_name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["password"]) )
{
    $userName = $_POST["user_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    insert_user($userName ,$email ,$phone ,$password ,$gender);
}
?>

<div class="container"> 
<h3 class="text-center mt-5 mb-5">welcome to dashboard signup</h3>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-row">
        <div class="form-group col-md-12">
        <label>name</label>
        <input style="direction: ltr;" name="user_name" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
        <label>Email</label>
        <input style="direction: ltr;" name="email" type="email" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Phone</label>
            <input style="direction: ltr;" name="phone" type="tel" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>Password</label>
            <input style="direction: ltr;" name="password" type="password" class="form-control">
        </div>
        <div class="form-group col-md-3 mb-3">
      <label for="validationCustom04">Gender</label>
      <select class="custom-select"  name="gender" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
</div>