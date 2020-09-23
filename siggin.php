<?php
    $page_name = "sign in";
    require_once "init.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"]) && !empty($_POST["password"]) )
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    check_user($email,$password);
}
?>

<div class="container"> 
<h3 class="text-center mt-5 mb-5">welcome to dashboard signup</h3>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-row">
        <div class="form-group col-md-12">
        <label>Email</label>
        <input style="direction: ltr;" name="email" type="email" class="form-control">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group col-md-12">
            <label>Password</label>
            <input style="direction: ltr;" name="password" type="password" class="form-control">
        </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>