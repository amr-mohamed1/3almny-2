<?php
    require_once "init2.php";

    /*insert into material table*/

function insert_material ($sub , $lecNo , $space , $online , $download , $date , $doc , $filter){
    global $con;
    $stmt = $con->prepare("INSERT INTO material(subject,lecture_number,space,view_link,download_link,date,doctor,filter) Value(:subject, :lecture_number ,:space ,:view_link ,:download_link ,:date ,:doctor ,:filter)");
    $stmt->execute(
        array(
            ":subject"     => $sub,
            ":lecture_number"    => $lecNo,
            ":space"    => $space,
            ":view_link" => $online,
            ":download_link" => $download,
            ":date" => $date,
            ":doctor" => $doc,
            ":filter" => $filter,
        )
        );
        echo "
            <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
            thanks for your time .. You will return to the previous page in 2 seconds
          </div></div>
        ";
        header("Refresh:2; url=dashboard.php");

}

/*insert into courses table*/

function insert_course ($course , $c_name , $des , $view , $less_num , $inst , $img_src , $filter){
    global $con;
    $stmt = $con->prepare("INSERT INTO courses(course,course_name,description,view_link,lessons_number,instructor,img_src,filter) Value(:course, :course_name ,:description ,:view_link ,:lessons_number ,:instructor ,:img_src ,:filter)");
    $stmt->execute(
        array(
            ":course"     => $course,
            ":course_name"    => $c_name,
            ":description"    => $des,
            ":view_link" => $view,
            ":lessons_number" => $less_num,
            ":instructor" => $inst,
            ":img_src" => $img_src,
            ":filter" => $filter,
        )
        );
        echo "
            <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
            thanks for your time .. You will return to the previous page in 2 seconds
          </div></div>
        ";
        header("Refresh:2; url=dashboard.php");

}

/*insert into books table*/

function insert_book ($b_name , $pages_num , $size , $download_times , $view_link , $img_src){
    global $con;
    $stmt = $con->prepare("INSERT INTO books(book_name,pages_number,size,download_times,view_link,img_src) Value(:b_name, :p_num ,:size ,:down_times ,:view_link ,:img_src)");
    $stmt->execute(
        array(
            ":b_name"     => $b_name,
            ":p_num"    => $pages_num,
            ":size"    => $size,
            ":down_times" => $download_times,
            ":view_link" => $view_link,
            ":img_src" => $img_src,
        )
        );
        echo "
            <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
            thanks for your time .. You will return to the previous page in 2 seconds
          </div></div>
        ";
        header("Refresh:2; url=dashboard.php");

}


    /*update user table*/


function updateUser($id , $user_name , $password , $phone , $email){
    global $con;
    $stmt = $con->prepare("UPDATE users SET name=? , password=? , phone=? , email=? WHERE id = ?");
    $stmt->execute(array(
        $user_name,
        $password,
        $phone,
        $email,
        $id
    ));    
    echo "
    <div class='container'>
        <p class='alert alert-success'>Success your data has been updated you will return after 3s</p>
    </div>
    ";

    header("Refresh:3; url=dashboard.php");
}

    /*get all data from material table*/

function getAllMaterial(){
    global $con;
    $stmt = $con->prepare("SELECT * FROM material");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

    /*get all data from courses table*/

function getAllCourses(){
    global $con;
    $stmt = $con->prepare("SELECT * FROM courses");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

    /*get all data from material table with id*/

function getMaterial_with_id($id){
    global $con;
    $stmt = $con->prepare("SELECT * FROM material WHERE id = ?");
    $stmt->execute(array($id));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    return $rows;
}

    /*update data from matrial table*/

function updateMaterial($id , $subject , $lec_number , $space , $view , $download , $date , $doc ,$filter){
    global $con;
    $stmt = $con->prepare("UPDATE material SET subject=? , lecture_number=? , space=? , view_link=? , download_link=? ,date=? , doctor=? , filter=? WHERE id = ?");
    $stmt->execute(array(
        $subject,
        $lec_number,
        $space,
        $view,
        $download,
        $date,
        $doc,
        $filter,
        $id
    ));    
    echo "
    <div class='container'>
        <p class='alert alert-success'>Success your data has been updated you will return after 3s</p>
    </div>
    ";

    header("Refresh:3; url=update_material.php");
}

    /*update data from courses table*/

function update_course($id ,$c_name ,$c_abbre ,$description ,$view ,$less_no ,$inst ,$img ,$filter){
    global $con;
    $stmt = $con->prepare("UPDATE courses SET course=? , course_name=? , description=? , view_link=? , lessons_number=? ,instructor=? , img_src=? , filter=? WHERE id = ?");
    $stmt->execute(array(
        $c_name,
        $c_abbre,
        $description,
        $view,
        $less_no,
        $inst,
        $img,
        $filter,
        $id
    ));     
    echo "
    <div class='container'>
        <p class='alert alert-success'>Success your data has been updated you will return after 3s</p>
    </div>
    ";

    header("Refresh:3; url=update_courses.php");
}

    /*get all data from courses table with id*/

    function getCourses_with_id($id){
        global $con;
        $stmt = $con->prepare("SELECT * FROM courses WHERE id = ?");
        $stmt->execute(array($id));
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }

    /*get all date from books*/
    function getAllBooks(){
        global $con;
        $stmt = $con->prepare("SELECT * FROM books");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    
    /*update books table*/

    function update_books($id ,$b_name ,$page_num ,$size ,$down_times ,$view ,$img_src){
        global $con;
        $stmt = $con->prepare("UPDATE books SET book_name=? , pages_number=? , size=? , download_times=? , view_link=? ,img_src=? WHERE id = ?");
        $stmt->execute(array(
            $b_name,
            $page_num,
            $size,
            $down_times,
            $view,
            $img_src,
            $id
        ));     
        echo "
        <div class='container'>
            <p class='alert alert-success'>Success your data has been updated you will return after 3s</p>
        </div>
        ";
    
        header("Refresh:3; url=update_courses.php");
    }


        /*get all data from books table with id*/

        function getBooks_with_id($id){
            global $con;
            $stmt = $con->prepare("SELECT * FROM books WHERE id = ?");
            $stmt->execute(array($id));
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rows;
        }