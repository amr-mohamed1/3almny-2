<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
    <a class="navbar-brand" href="#"><img src="../img/Untitled-3%20(3).png" alt="main-logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if($_SESSION['gender'] == "Male"){
                 echo "MR/ " . $_SESSION['userName'];
                }else{
                    echo "Miss/ " . $_SESSION['userName'];
                }
                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="update_user.php">update user information</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../logout.php">logout</a>
                </div>
            </li>
            </ul>
        </div>
    </div>
    </nav>

    
    <div class = "intro">
        <h3 class="text-center">Welcome back <?php if($_SESSION['gender'] == "Male"){
                 echo "MR/ " . $_SESSION['userName'];
                }else{
                    echo "Miss/ " . $_SESSION['userName'];
                }
                    ?></h3>
                    <p class="text-center">Through this page, you will be able to fully control the site by adding new content, modifying existing content, or deleting from content</p>
    </div>




    
<div class="button text-center">
<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="add_material.php">Add Material</a>
    <a class="dropdown-item" href="add_course.php">Add Courses</a>
    <a class="dropdown-item" href="add_book.php">Add Books</a>
  </div>
</div>


<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Update & Delete content
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="update_material.php">Material</a>
    <a class="dropdown-item" href="update_courses.php">Courses</a>
    <a class="dropdown-item" href="update_books.php">Books</a>
  </div>
</div>

</div>