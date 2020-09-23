<?php
    require_once "init.php";
function insert_user ($user , $email , $phone , $pass , $gender){
    global $con;
    $stmt = $con->prepare("INSERT INTO users(name,email,phone,password,gender) Value(:user,:email,:phone,:password ,:gender)");
    $stmt->execute(
        array(
            ":user"     => $user,
            ":email"    => $email,
            ":phone"    => $phone,
            ":password" => $pass,
            ":gender" => $gender,
        )
        );
        echo "
            <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
            thanks for signup un our page
          </div></div>
        ";

        
        header("Refresh:2; url=siggin.php");

}

function check_user ( $email , $pass){
    global $con;
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute(array($email));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    if ($count){
        if( $rows['password'] == $pass ){
            session_start();
            $_SESSION['userId']    = $rows['id'];
            $_SESSION['userName']  = $rows['name'];
            $_SESSION['userEmail'] = $rows['email'];
            $_SESSION['userPhone'] = $rows['phone'];
            $_SESSION['gender'] = $rows['gender'];
            if($_SESSION['gender'] == "Male"){ echo "
            <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
                welcome Back Mr/ "  . $_SESSION['userName'] . "
          </div></div>
        ";}else {
            echo "
            <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
                welcome Back Miss/ "  . $_SESSION['userName'] . "
          </div></div>
        "; 
        }
            header("Refresh:2; url=admin/dashboard.php");
    }else{
        echo "
            <div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
            Sorry The Email or Password is incorrect......!
          </div></div>
        ";
    }}else{
        echo "
            <div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
            Sorry The Email or Password is incorrect......!
          </div></div>
        ";
    }

}
function getAllMaterial(){
    global $con;
    $stmt = $con->prepare("SELECT * FROM material");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function getAllCourses(){
    global $con;
    $stmt = $con->prepare("SELECT * FROM courses");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function getAllBooks(){
    global $con;
    $stmt = $con->prepare("SELECT * FROM books");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}