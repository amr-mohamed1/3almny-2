<?php 

    $cssPath        = "layout/css/";
    $jsPath         = "layout/js/";
    $tempPath       = "includes/templates/";
    $funPath       = "includes/functions/";

    include "connect_db.php";
    
    include $tempPath . "header.php";
    include $tempPath . "footer.php";
    include $funPath . "functions.php";
    // if( !isset($noMaterial_header) ){
    //     include $tempPath . "material_header.php";
    //     include $tempPath . "material_footer.php";
    // };
    // if( !isset($noCourses_header) ){
    //     include $tempPath . "course_header.php";
    //     include $tempPath . "course_footer.php";
    // };
    // if( !isset($noBooks_header) ){
    //     include $tempPath . "books_header.php";
    //     include $tempPath . "books_footer.php";
    // };
    